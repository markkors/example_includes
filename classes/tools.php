<?php

class tools {
    
    
    
    public static function tableBuilder(array $data, string $tableClass = 'table') : string {
        $html = "<table class='$tableClass'>\n";
        $html .= "<thead>\n<tr>\n";
        foreach ($data[0] as $key => $value) {
            $html .= "<th>$key</th>\n";
        }
        $html .= "</tr>\n</thead>\n<tbody>\n";
        foreach ($data as $row) {
            $html .= "<tr>\n";
            foreach ($row as $cell) {
                $html .= "<td>$cell</td>\n";
            }
            $html .= "</tr>\n";
        }
        $html .= "</tbody>\n</table>";
        return $html;
    }

}

?>