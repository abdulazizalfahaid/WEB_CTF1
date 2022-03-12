<form action="https://mhsctf-cuppajoe.0xmmalik.repl.co/flag.php">
    <input type="text" name="txt" />
    <input type="submit" name="insert" value="insert" onclick="<?php show_source("flag.php");?>" />
    <input type="submit" name="select" value="select" onclick="select()" />
</form>

<?php
function select(){
    echo "The select function is called.";
}
function insert(){
    echo "The insert function is called.";
}
?>