<?php
//Classe Cadastro
    class Cadastro{
        //Declaração de Variáveis
        private int    $cpf;
        private string $nome;
        private int    $telefone;
        private string $endereco;
        private string $cidade;

        public function __construct($cpf, $nome, $telefone, $endereco, $cidade){
            $this->setCPF     ($cpf);
            $this->setNome    ($nome);
            $this->setTelefone($telefone);
            $this->setEndereco($endereco);
            $this->setCidade  ($cidade);
        }//Fim do Construtor

        //Métodos modificadores e de consulta
        

        //Get
        public function getCPF(){
            return $this->cpf;
        }//Fim do Método

        public function getNome(){
            return $this->nome;
        }//Fim do Método

        public function getTelefone(){
            return $this->telefone;
        }//Fim do Método

        public function getEndereco(){
            return $this->endereco;
        }//Fim do Método

        public function getCidade(){
            return $this->cidade;
        }//Fim do Método

        
        //Set
        public function setCPF($cpf){
            $this->cpf = $cpf;
        }//Fim do Método

        public function setNome($nome){
            $this->nome = $nome;
        }//Fim do Método

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }//Fim do Método

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }//Fim do Método

        public function setCidade($cidade){
            $this->cidade = $cidade;
        }//Fim do Método


        //Método Imprimir
        public function imprimir(){
            $msg = "\n\nCPF: "   .$this->getCPF().
                   "\nNome: "    .$this->getNome().
                   "\nTelefone: ".$this->getTelefone().
                   "\nEndereço: ".$this->getEndereco().
                   "\nCidade: "  .$this->getCidade();
            return $msg;
        }//Fim do Método Imprimir


        //Método Excluir
        public function excluir(){
            $this->setCPF     (0);
            $this->setNome    ("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade  ("");
            return "Dados Excluidos!";
        }//Fim do Método Excluir


        //Método Menu
        public function menu(){
            $men= "\nEscolha o que deseja atualizar: " .
                  "\n1. Nome: " .
                  "\n2. Telefone: " .
                  "\n3. Endereço: " .
                  "\n4. Cidade: ";
            return $men;
        }//Fim do Método Menu


        //Método Atualizar
        public function atualizar($opcao, $dado){
            switch($opcao){
                case 1:
                    $this->setNome($dado);
                    break;
                case 2:
                    $this->setTelefone($dado);
                    break;
                case 3:
                    $this->setEndereco($dado);
                    break;
                case 4:
                    $this->setCidade($dado);
                    break;
                default:
                    return "Opção escolhida não é válida";
            }//Fim do Opção
        }//Fim do Método Atualizar

    }//Fim da Classe Cadastro
?>