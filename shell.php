<?php
include_once('template/header.php');
include_once('app/shell-func.php');
$shell = new SimpleShell();
?>
<style>
 @keyframes blink {
  0% { opacity: 1; }
  25% { opacity: 0; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}
@-webkit-keyframes blink {
  0% { opacity: 1; }
  25% { opacity: 0; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}
@-ms-keyframes blink {
  0% { opacity: 1; }
  25% { opacity: 0; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}
@-moz-keyframes blink {
  0% { opacity: 1; }
  25% { opacity: 0; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}
.prompt, .command {
    color: #0c0;
    text-shadow: 0 0 3px rgba(0,100,0,50);
  	width: 95%;
    background-color: #232323;
    border-style: none;
    margin: auto;
    padding: 7px;
    font-size: 12px;
}
.cursor {
  background: #0c0;
  animation: blink 1s linear infinite;
  -webkit-animation: blink 1s infinite linear;
  -ms-animation: blink 1s infinite linear;
  -moz-animation: blink 1s infinite linear;
  -webkit-box-shadow: 0 0 5px rgba(0,100,0,50);
  -moz-box-shadow: 0 0 5px rgba(0,100,0,50);
  -ms-box-shadow: 0 0 5px rgba(0,100,0,50);
  -o-box-shadow: 0 0 5px rgba(0,100,0,50);
  box-shadow: 0 0 5px rgba(0,100,0,50);
} 
textarea {
    overflow: hidden;
    width: 95% !important;
    background: #232323;
    color: #24c929;
    height: 300px;
    padding: 10px;
    border-style: none;
}
pre{
    background-color: #232323;
    width: 600px;
  	margin:auto;
    font-size: 10px;
}
input[type=text]:focus, textarea:focus {
border-style: none;
  outline: none;
}
</style>
<?php
if(isset($_POST['send'])){
$output = $shell->MySimpleShell($_POST['send']);
}else{
$output = $shell->Begin('pwd'); 
}
?>   
<form class="terminal" action="" method="post">
  <pre>
  <textarea readonly name="show"><?php echo "$output"; ?></textarea>
  <input autofocus class="prompt" type="text" name="send" />
  </pre>      
</form>

<?php
 include_once('template/footer.php');
?>