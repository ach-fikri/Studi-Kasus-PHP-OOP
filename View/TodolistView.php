<?php

namespace View{

    use Service\TodolistServiceImpl;
    use Helper\InputHelper;

    class TodolistView
    {
        private TodolistServiceImpl $totolistService;

        public function __construct(TodolistServiceImpl $totolistService)
        {
            $this->totolistService = $totolistService;
        }

        function showTodolist(): void{
            while (true) {
                $this->totolistService->showTodolist();
                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;
                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == 1) {
                    $this->addTodolist();
                } else if ($pilihan == 2) {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan Tidak DImengerti" . PHP_EOL;
                }
            }

            echo "sampai jumpa lagi".PHP_EOL;
        }

        function addTodolist() :void{
            echo "MENAMBAH TODO".PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal) ");

            if ($todo == "x"){
                echo "batal menambah todo". PHP_EOL;
            }else{
                $this->totolistService->addTodolist($todo);
            }

        }

        function removeTodolist():void{
            echo "MENGHAPUS TODO".PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk membatalkan)");

            if ($pilihan == "x"){
                echo "Batal Menghapus Todo".PHP_EOL;
            }else {
               $this->totolistService->removeTodolist($pilihan);
            }
        }
    }
}