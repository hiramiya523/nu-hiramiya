CREATE TABLE IF EXISTS quiz (
    id_quiz NOT NULL AUTO_INCREMENT,
    c_question NOT NULL VARCHAR(3000) COMMENT '問題', -- 1文字3バイトで想定。
    c_answer NOT NULL VARCHAR(6000) COMMENT '解答', -- 1文字3バイトで想定。

)