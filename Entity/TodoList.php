<?php

namespace Entity{

    class TodoList{
        private string $todo;

        /**
         * @param string $todo
         */
        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }


        /**
         * @return string
         */
        public function getTodo(): string
        {
            return $this->todo;
        }

        /**
         * @param string $todo
         */
        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }
    }
}