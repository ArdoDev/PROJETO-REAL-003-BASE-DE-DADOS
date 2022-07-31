<?php
    $sql = "SELECT * FROM dnit";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd>0){
            print"<table class='table table-hover table-stripe table-bordered'>";
            print"<tr>";
            print "<th>microrregião</th>";
            print "<th>br</th>";
            print "<th>tipo</th>";
            print "<th>código</th>";
            print "<th>relevo</th>";
            print "<th>vmda</th>";
            print "<th>vmdc</th>";
            print "<th>nota</th>";
            print "<th>porto</th>";
            print "<th>capitais</th>";
            print "<th>no</th>";
            print"</tr>";
        while($row = $res->fetch_object()){
            print"<tr>";
            print "<td>".$row-> microrregião."</td>";
            print "<td>".$row->br."</td>";
            print "<td>".$row->tipo."</td>";
            print "<td>".$row->código."</td>";
            print "<td>".$row->relevo."</td>";
            print "<td>".$row->vmda."</td>";
            print "<td>".$row->vmdc."</td>";
            print "<td>".$row->nota."</td>";
            print "<td>".$row->porto."</td>";
            print "<td>".$row->capitais."</td>";
            print "<td>".$row->no."</td>";
            print"</tr>";
        }
        print"</table>";
    }else{
        print"<p classe='alert alert-danger'>Sem Resultados.<p>";
    };
