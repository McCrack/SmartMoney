<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class NestedProcedure extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        $procedure = "
        CREATE FUNCTION nested_set() RETURNS INT
        BEGIN
          UPDATE
            pages t
          SET
            left_key = NULL, right_key = NULL;
          SET
            @i := 0;

          UPDATE
            pages t
          SET
            left_key = (@i := @i + 1), right_key = (@i := @i + 1)
          WHERE
            t.parent_id = 0;

          forever: LOOP

            SET @parent_id := NULL;
            SELECT
              t.id, t.right_key
            FROM
              pages t, pages tc
            WHERE
              t.id = tc.parent_id AND tc.left_key IS NULL AND t.right_key IS NOT NULL
            ORDER BY
              t.right_key
            LIMIT 1
            INTO
              @parent_id, @parent_right;

            IF
              @parent_id IS NULL
            THEN LEAVE
              forever;
            END IF;

            SET @current_left := @parent_right;

            SELECT
              @current_left + COUNT(*) * 2
            FROM
              pages
            WHERE
              parent_id = @parent_id
            INTO
              @parent_right;

            SET @current_length := @parent_right - @current_left;

            UPDATE
              pages t
            SET
              right_key = right_key + @current_length
            WHERE
              right_key >= @current_left
            ORDER BY
              right_key;

            UPDATE
              pages t
            SET
              left_key = left_key + @current_length
            WHERE
              left_key > @current_left
            ORDER BY
              left_key;

            SET @i := (@current_left - 1);
            UPDATE
              pages t
            SET
              left_key = (@i := @i + 1), right_key = (@i := @i + 1)
            WHERE
              parent_id = @parent_id
            ORDER BY
              id;
          END LOOP;

          RETURN (SELECT MAX(right_key) FROM pages t);
        END
        ";

        DB::unprepared("DROP FUNCTION IF EXISTS nested_set");
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
