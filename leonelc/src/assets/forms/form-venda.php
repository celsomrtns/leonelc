<?php
if ( isset($_POST['submit']) ) {
  $data = array(
      'secret' => "0x15799b0Fbe2592271f643A624A1cD6B557f469Cf",
      'response' => $_POST['h-captcha-response']
  );
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://hcaptcha.com/siteverify");
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  $responseData = json_decode($response);
echo responseData;
  if($responseData->success) {


        if (isset($_POST['nome'])) {
          $nome = $_POST['nome'];
        } 
        if (isset($_POST['tel'])) {
          $tel = $_POST['tel'];
        }
        if (isset($_POST['cel'])) {
          $cel = $_POST['cel'];
        }
        if (isset($_POST['skype'])) {
          $skype = $_POST['skype'];
        }
        if (isset($_POST['email'])) {
          $email = $_POST['email'];
        }
        if (isset($_POST['admin'])) {
          $admin = $_POST['admin'];
        }
        if (isset($_POST['grupo'])) {
          $grupo = $_POST['grupo'];
        }
        if (isset($_POST['cota'])) {
          $cota = $_POST['cota'];
        }
        if (isset($_POST['bem_objeto'])) {
          $bem_objeto = $_POST['bem_objeto'];
        }
        if (isset($_POST['valor_bem'])) {
          $valor_bem = $_POST['valor_bem'];
        }
        if (isset($_POST['total_plano'])) {
          $total_plano = $_POST['total_plano'];
        }
        if (isset($_POST['mensalidades_pagas'])) {
          $mensalidades_pagas = $_POST['mensalidades_pagas'];
        }
        if (isset($_POST['mensalidades_a_pagar'])) {
          $mensalidades_a_pagar = $_POST['mensalidades_a_pagar'];
        }
        if (isset($_POST['mensalidades_em_atraso'])) {
          $mensalidades_em_atraso = $_POST['mensalidades_em_atraso'];
        }
        if (isset($_POST['valor_parcela_atual'])) {
          $valor_parcela_atual = $_POST['valor_parcela_atual'];
        }
        if (isset($_POST['saldo_devedor'])) {
          $saldo_devedor = $_POST['saldo_devedor'];
        }
        if (isset($_POST['valor_pretendido'])) {
          $valor_pretendido = $_POST['valor_pretendido'];
        }
        if (isset($_POST['contemplado'])) {
          $contemplado = $_POST['contemplado'];
        }
        if (isset($_POST['forma_contemplacao'])) {
          $forma_contemplacao = $_POST['forma_contemplacao'];
        }
        if (isset($_POST['como_conheceu'])) {
          $como_conheceu = $_POST['como_conheceu'];
        }
        if (isset($_POST['outros_qual'])) {
          $outros_qual = $_POST['outros_qual'];
        }


        if (!$nome) {
          echo '<script>alert("Nome em branco. Preenchimento obrigatório.");
          history.back();
          </script>';
          exit;
        }
        if (!$cel) {
          echo '<script>alert("No. do Celular em branco. Preenchimento obrigatório.");
          history.back();
          </script>';
          exit;
        }
        if (!$email) {
          echo '<script>alert("E-mail em branco. Preenchimento obrigatório.");
          history.back();
          </script>';
          exit;
        }





        $mensagem = '
          <!DOCTYPE html>
        <html lang="pt-br">
        <head>
        <meta charset="utf-8">
        </head>
        <body>
        <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#faeee1"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#ebcba4"><table width="100%" border="0" cellspacing="0" cellpadding="10">
                  <tr>
                    <td width="29%"><img style="margin-left:20px" src="http://www.leonelconsorcios.com.br/imgs/logo.png" width="128" height="64" /></td>
                    <td width="71%" align="right" style="font-family:Arial, Helvetica, sans-serif;color:#0c4da2;padding-right:20px"><strong>FORMULÁRIO DE VENDA</strong><br />
                      <span style="font-size:.8em">PREENCHIDO PELO SITE</span></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="20" cellpadding="0">
                  <tr>
                    <td style="font-family:Arial, Helvetica, sans-serif;color:#0c4da2;text-align:center">Dados preenchidos pelo FORMULÁRIO de VENDA.</td>
                  </tr>
                  <tr>
                    <td><table width="90%" border="0" align="center" cellpadding="5" cellspacing="5" style="font-family:Arial, Helvetica, sans-serif;color:#0c4da2">
                      <tr>
                        <td width="34%" bgcolor="#FFFFFF" align="right"><strong>Nome:</strong></td>
                        <td width="66%" bgcolor="#FFFFFF">'.$nome.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Telefone:</strong></td>
                        <td bgcolor="#FFFFFF">'.$tel.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Celular:</strong></td>
                        <td bgcolor="#FFFFFF">'.$cel.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Skype:</strong></td>
                        <td bgcolor="#FFFFFF">'.$skype.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>e-mail:</strong></td>
                        <td bgcolor="#FFFFFF">'.$email.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Administradora:</strong></td>
                        <td bgcolor="#FFFFFF">'.$admin.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Grupo:</strong></td>
                        <td bgcolor="#FFFFFF">'.$grupo.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Cota:</strong></td>
                        <td bgcolor="#FFFFFF">'.$cota.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Bem Objeto:</strong></td>
                        <td bgcolor="#FFFFFF">'.$bem_objeto.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Valor do Bem:</strong></td>
                        <td bgcolor="#FFFFFF">'.$valor_bem.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>No. Total do Plano:</strong></td>
                        <td bgcolor="#FFFFFF">'.$total_plano.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>No. de Mensalidades Pagas:</strong></td>
                        <td bgcolor="#FFFFFF">'.$mensalidades_pagas.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>No. de Mensalidades a Pagar:</strong></td>
                        <td bgcolor="#FFFFFF">'.$mensalidades_a_pagar.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>No. de Mensalidades em Atraso:</strong></td>
                        <td bgcolor="#FFFFFF">'.$mensalidades_em_atraso.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Valor da Parcela Atual:</strong></td>
                        <td bgcolor="#FFFFFF">'.$valor_parcela_atual.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Saldo Devedor:</strong></td>
                        <td bgcolor="#FFFFFF">'.$saldo_devedor.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Valor Pretendido para a Venda:</strong></td>
                        <td bgcolor="#FFFFFF">'.$valor_pretendido.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Contemplado:</strong></td>
                        <td bgcolor="#FFFFFF">'.$contemplado.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Forma de Contemplação:</strong></td>
                        <td bgcolor="#FFFFFF">'.$forma_contemplacao.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Como conheceu nosso site?:</strong></td>
                        <td bgcolor="#FFFFFF">'.$como_conheceu.'</td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" align="right"><strong>Qual?:</strong></td>
                        <td bgcolor="#FFFFFF">'.$outros_qual.'</td>
                      </tr>
                      
                    </table></td>
                  </tr>
                  <tr>
                    <td><p style="font-family:Arial, Helvetica, sans-serif;color:#0c4da2;text-align:center">Leonel Consórcios</p></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table>
        </body>
        </html>
          ';
          
          $arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;
          if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
            $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb");
            $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));
            $anexo = base64_encode($anexo);
            fclose($fp);
            $anexo = chunk_split($anexo);
            $boundary = "XYZ-" . date("dmYis") . "-ZYX";
            $mens = "--$boundary\n";
            $mens .= "Content-Transfer-Encoding: 8bits\n";
            $mens .= "Content-Type: text/html; charset=\"utf-8\"\n\n"; //plain
            $mens .= "$mensagem\n";
            $mens .= "--$boundary\n";
            $mens .= "Content-Type: ".$arquivo["type"]."\n";
            $mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
            $mens .= "Content-Transfer-Encoding: base64\n\n";
            $mens .= "$anexo\n";
            $mens .= "--$boundary--\r\n";
            $headers = "MIME-Version: 1.0\n";
            $headers .= "From: venda@leonelconsorcios.com.br\n";
            $headers .= "Return-Path: venda@leonelconsorcios.com.br\n"; // return-path
            $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
            $headers .= "$boundary\n";
            //envio o email com o anexo
            mail("venda@leonelconsorcios.com.br","[LEONELCONSORCIOS.COM.BR - VENDA] - Contato de $nome, Tel.: $tel","$mens",$headers,"-r".$email);
            header("Location: /formok");
          }
          //se não tiver anexo
          else{


          $headers = "MIME-Version: 1.1\n";
          $headers .= "Content-type: text/html; charset=utf-8\n";
          $headers .= "From: venda@leonelconsorcios.com.br\n"; // remetente
          $headers .= "Return-Path: venda@leonelconsorcios.com.br\n"; // return-path

          mail("venda@leonelconsorcios.com.br","[LEONELCONSORCIOS.COM.BR - VENDA] - Contato de $nome, Tel.: $tel","$mensagem",$headers,"-r".$email);
            header("Location: /formok"); 
          }



  } else {
    echo "<script type='javascript'>alert('Você não marcou o Captcha!');";
  }
}

?>