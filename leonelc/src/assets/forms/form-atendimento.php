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
      if (isset($_POST['tipo'])) {
        $tipo = $_POST['tipo'];
      }
      if (isset($_POST['motivo'])) {
        $motivo = $_POST['motivo'];
      }
      if (isset($_POST['mensagem'])) {
        $mensagem = $_POST['mensagem'];
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
                  <td width="71%" align="right" style="font-family:Arial, Helvetica, sans-serif;color:#0c4da2;padding-right:20px"><strong>FORMULÁRIO DE ATENDIMENTO</strong><br />
                    <span style="font-size:.8em">PREENCHIDO PELO SITE</span></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="20" cellpadding="0">
                <tr>
                  <td style="font-family:Arial, Helvetica, sans-serif;color:#0c4da2;text-align:center">Dados preenchidos pelo FORMULÁRIO de ATENDIMENTO.</td>
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
                      <td bgcolor="#FFFFFF" align="right"><strong>Motivo:</strong></td>
                      <td bgcolor="#FFFFFF">'.$motivo.'</td>
                    </tr>
                    <tr>
                      <td bgcolor="#FFFFFF" align="right"><strong>Mensagem:</strong></td>
                      <td bgcolor="#FFFFFF">'.$mensagem.'</td>
                    </tr>
                    <tr>
                      <td bgcolor="#FFFFFF" align="right"><strong>Como conheceu:</strong></td>
                      <td bgcolor="#FFFFFF">'.$como_conheceu.'</td>
                    </tr>
                    <tr>
                      <td bgcolor="#FFFFFF" align="right"><strong>Qual:</strong></td>
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
        

        $headers = "MIME-Version: 1.1\n";
        $headers .= "Content-type: text/html; charset=utf-8\n";
        $headers .= "From: atendimento@leonelconsorcios.com.br\n"; 
        $headers .= "Return-Path: atendimento@leonelconsorcios.com.br\n"; 

        mail("atendimento@leonelconsorcios.com.br","[LEONELCONSORCIOS.COM.BR - ATENDIMENTO] - Contato de $nome, Tel.: $tel","$mensagem",$headers,"-r".$email);
          header("Location: /formok"); 


  } else {
    echo "<script type='javascript'>alert('Você não marcou o Captcha!');";
  }
}

?>