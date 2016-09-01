<?php
class SimpleShell {
  
	public $data;
  
    public function Begin($command)
    {
          return $this->MySimpleShell($command);
    }
  
	public function MySimpleShell($command)
	{
          if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");
      // log in at server1.example.com on port 22
      if(!($con = ssh2_connect("localhost", 22))){
          echo "fail: unable to establish connection\n";
      } else {
          // try to authenticate with username root, password secretpassword
          if(!ssh2_auth_password($con, "root", "root")) {
              echo "fail: unable to authenticate\n";
          } else {
              // allright, we're in!
              $this->data .= "Jesteś zalogowany jako użytkownik test...\n";

              // execute a command
              if (!($stream = ssh2_exec($con, "$command" ))) {
                  echo "fail: unable to execute command\n";
              } else {
                  // collect returning data from command
                  	stream_set_blocking($stream, true);
                      while ($buf = fread($stream,4096)) {
                         return $this->data . $buf;
                      }
                      fclose($stream);
              		}
    			}
			}
		}
}