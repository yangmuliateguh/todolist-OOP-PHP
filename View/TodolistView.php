<?php

namespace View {
    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService){
            $this->todolistService = $todolistService;
        }

        function showTodolist () : void {
            while(true){
                $this->todolistService->showtodolist();
        
                echo "MENU" . PHP_EOL;
                echo "1. tambah todo" . PHP_EOL;
                echo "2. hapus todo" . PHP_EOL;
                echo "x. keluar" . PHP_EOL;
        
                $pilihan = InputHelper::input("pilih");
        
                if ($pilihan == '1') $this->addTodolist();
                else if ($pilihan == '2') $this->removeTodolist();
                else if ($pilihan == 'x') break;
                else echo "pilihan tidak valid" . PHP_EOL;
            }
        
            echo "sampai jumpa " . PHP_EOL;
        }

        function addTodolist () : void {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");
        
            if ($todo == "x") echo "batal menambah todo" . PHP_EOL;
            else $this->todolistService->addtodolist($todo);
        }

        function removeTodolist () : void {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            if ($pilihan == "x") echo "batal menghapus todo" . PHP_EOL;
            else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}