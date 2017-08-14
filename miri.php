<?php
  
  //conectar ao banco de dados
  //tony mars 14/08/2017

  $server="localhost:8080";
  $user="tonitoni";
  $pass="tonitoni";
  $db="MIRI-MUSIC";

  $conn=mysql_connect("$server","$user","$pass") or die ("erro");

  $db=mysql_select_db("$db") or die ("erro");

  mysql_query("$conn");


  if (!$conn) { 

               echo "nao foi possivel connectar-se ao banco de dados";





              } else {

 function add_news(){

              $sql=mysql_query("INSERT INTO news (titulo,subtitulo,arquivo,conteudo,data) VALUES ("$titulo","$subtitulo","$arquivo","$conteudo",now()") ");
              }
               
 function show_news(){
               $news=array()
               $conn=mysql_query("SELECT titulo,subtiluto,arquivo,conteudo,data FROM news ORDER BY id DESK");

                $linha=mysql_fetch_assoc($conn){

                  $titulo=".$linha["titulo"].";
                  $subtilo=".$linha["titulo"].";
                  $arquivo=".$linha["arquivo"].";
                  $conteudo=".$linha["conteudo"]";
                  $data=".$linha["data"]";

           }
                return $news;

    }

function slade_news(){
              $slade_news=array();
              $sql="SELECT id,arquivo,titulo FROM news LIMIT 20";

              $Q=mysql_query($Q);

              $mostar=mysql_fetch_assoc($Q){


                $arquivo=".$mostra["arquivo"].";
                $titulo=".$mostra["titulo"].";
            
              return $slade_news;




          }
        }
 function add_music(){
              $sql=mysql_query("INSERT INTO musics (logo,cantor,album,titulo,link) VALUES ("$logo","$cantor","$album","$titulo","$link") ");
              }
 function show_music( ){

                $conn1=mysql_query("SELECT logo,cantor,album,titulo,link FROM musics ORDER BY id DESK LIMIT 15");
                $linha=mysql_fetch_assoc($conn1){
                  $logo=".$linha["logo"].";
                  $cantor=".$linha["cantor"].";
                 $album=".$linha["album"].";
                  $titulo=".$linha["titulo"].";
                  $link=".$linha["link"].";
                  }
            
              return $show_music;
            
          }

function check_account(){

              if(!isset($_SESSION["user_id"])){

              header ("location:index.php");
              exit();

              }

              function add_admin($nome,$senha){

                $sql=mysql_query("INSERT nome,senha INTO admin VALUES ("$nome","$senha")");
              }


function search (){
      if (!isset($buscar)) {
        echo "voce nao digitou nenhuma palavra";
      } else {
        $query=mysql_query("SELECT * FROM musicas AND news OR videos WHERE name OR titulo LIKE "%'.$buscar'%" ");

       $a=mysql_fetch_assoc($query){


        }


}

function check_senha(){

              $senha_check("SELECT * FROM usuarios WHERE senha="{$senha}" ");
              $sql_check_num=mysql_num_rows($senha_check);

              if ($senha_check == 0){

              echo "Esta senha esta errada";
              }

              }

              
     }

              }
              }

































































































































?>