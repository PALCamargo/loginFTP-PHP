<?php
    date_default_timezone_set('America/Sao_Paulo');

    if(!isset($_POST['user'])){
        header("Location: 404");
    }
?>

<!doctype html>
<html lang="en">
	<head>
		<link rel="shortcut icon" href="../img/favicon.ico" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

		<title>Backup | Inicio</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

		<!-- Bootstrap core CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		
	</head>

    <body class="text-center container"  style="background: #40739e;">
            <header >
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 5px; margin-top: 6px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo2.png" alt="" width="80"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          
        </ul>
        <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" style="text-transform: uppercase;"><?php echo $_POST['user']; ?>   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=logoff"> Sair <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></a>
                </li>
            </ul>
        </form>
      </div>
    </div>
  </nav>
</header>
        <div class="container">

            <div class="row row-cols-2 row-cols-md-3 g-4" style="margin-top: 5px;margin-bottom: 15px;">
                <?php
                    function formatBytes($size, $precision = 2) {
                        $base = log($size, 1024);
                        $suffixes = array('', 'Kb', 'Mb', 'Gb', 'Tb');   
                        return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
                    }

                    function compareDates($date1, $date2){
                        return strtotime($date1) - strtotime($date2);
                    }
                
                    if(isset($_POST['user'])){
                        $ftp_server = "187.120.240.51";
                        $ftp_user = $_POST['user'];
                        $ftp_pass = $_POST['pass'];
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
                                $pasta;
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
                                                <p class='card-text'>Tamanho: ".formatBytes(ftp_size($conn_id, $arquivos), 0)."</p>
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
                        } else {
                            echo "

                                <div class='col'>
                                    <div class='card h-100'>
                                        <div class='card-body' style='background: #ffffff;'>
                                            <h5 class='card-title'>Não há arquivos de backup!</h5>
                                        </div>
                                    </div>
                                </div>

                            ";
                        }

                        
                
                        
                    } else {
                        header("Location: index");
                    }
                ?>
            </div>
        </div>
    </body>
</html>