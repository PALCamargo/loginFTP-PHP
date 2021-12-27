<?php

    $ftp_server = "187.120.240.51";
    $ftp_user = "pedro";
    $ftp_pass = "99850522";
    $_SESSION['user'] = $ftp_user;

    // set up a connection or die
    $conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server");

    // try to login
    if (@ftp_login($conn_id, $ftp_user, $ftp_pass)) {
        //echo "Connected as $ftp_user@$ftp_server\n";
    } else {
        echo "<body hidden>";
        echo "<meta http-equiv='refresh' content='0; URL='index'/>";
    }
    echo "<br>";
    // Recebe lista dos arquivos do ftp
    $lista = ftp_nlist($conn_id, '/');

    $countLista = count($lista);

    if($countLista>0) {
        foreach ($lista as $pasta) {
            echo $pasta;
        }

        $contents = ftp_nlist($conn_id, $pasta);

        $countList = count($contents);

        foreach ($contents as $arquivos) {
            $buff = ftp_mdtm($conn_id, $arquivos);

            echo "

                <div class='col'>
                    <div class='card h-100' >
                        <div class='card-body' style='background: #ffffff;'>
                            <h6 class='card-title'>".$arquivos."</h6>
                            <p class='card-text'>Tamanho: ".ftp_size($conn_id, $arquivos)."</p>
                        </div>
                        <div class='card-footer text-muted'>";
                            if ($buff != -1) {
                                // somefile.txt was last modified on: March 26 2003 14:16:41.
                                echo "Última modificação: " . date("d/m/Y H:i:s", $buff);
                            } else {
                                echo "Couldn't get mdtime";
                            }
                        echo "</div>
                        
                    </div>
                </div>

            ";
        }

        $local_file = "C:".$arquivos;
        $server_file = $arquivos;

        if(is_dir("C:/$pasta")){
            //ftp_get($conn_id, $local_file, $server_file, FTP_BINARY);
        } else {
            //echo "Diretorio criado em C:$pasta";
            //mkdir("C:/$pasta", 0777);
        }


        if (isset($_GET['action']) && $_GET['action'] == 'logoff') {
            session_destroy();
        }

        if(!isset($_SESSION['user'])) {
            ftp_close($conn_id);
        }
    }

    if(isset($_GET['file']) && file_exists("/Teste/".$_GET['file'])) {
        $file = $_GET['file']; // variável que pega o nome do arquivo que deseja fazer o download
        $type = filetype("/Teste/{$file}"); //pega o tipo do arquivo que deseja fazer o download
        $size = filesize("/Teste/{$file}"); // pega o tamanho do arquivo

        header("Content-Description:File Transfer"); //descriptografando para fazer o download
        header("Content-Type:($type)");  // pegando o tipo
        header("Content-lenght:($size)"); // pegando o tamanho
        header("Content-Disposition: attachment; filename=$file"); //verificando e inicializando o downlaod
        readfile("/Teste/{$file}"); //fazendo o download
        exit; // saindo

        ftp_close($conn_id);

    }
?>
<a href="teste.php?file=TEste.txt">teste</a>