<?php
$sql = "SELECT * FROM pontis";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd>0){
        print"<table class='table table-hover table-stripe table-bordered'>";
        print"<tr>";
        print "<th>microrregião</th>";
        print "<th>br</th>";
        print "<th>tipo</th>";
        print "<th>código</th>";
        print "<th>h</th>";
        print"</tr>";
    while($row = $res->fetch_object()){
        print"<tr>";
        print "<td>".$row-> microrregião."</td>";
        print "<td>".$row->br."</td>";
        print "<td>".$row->tipo."</td>";
        print "<td>".$row->código."</td>";
        print "<td>".$row->h."</td>";
        print"</tr>";
    }
    print"</table>";
}else{
    print"<p classe='alert alert-danger'>Sem Resultados.<p>";
};
?>