<?php
function find($word_array, $return_array)
{
    try {
        $array_string = $word_array;
        $splitted     = [];
        foreach ($array_string as $string) {
            $string_split = str_split($string);
            $splitted[]   = $string_split;
        }
        $sprinted = [];
        foreach ($splitted as $key => $val) {
            foreach ($val as $key2 => $val2) {
                $sprinted[] = $val2;
            }
        }
        $count_arr  = count($array_string);
        $out        = array_count_values($sprinted);
        $kata_akhir = [];
        foreach ($out as $key => $val) {
            if ($val >= $count_arr) {
                $kata_akhir[] = $key;
            } else {
                $kata_akhir[] = '-';
            }
        }
        $kata_akhir_string = implode(' ', $kata_akhir);
        $kata_akhir_diolah = str_replace('-', ' ', $kata_akhir_string);
        $kata_akhir_diolah = explode(' ', $kata_akhir_diolah);
        $kata_akhir_diolah = array_filter($kata_akhir_diolah);
        $kata_final        = [];
        foreach ($kata_akhir_diolah as $key => $val) {
            $kata_final[] = $val;
        }
        if ($return_array) {
            return $kata_final;
        } else {
            return implode(' ', $kata_final);
        }
    } catch (\Throwable$e) {
        if ($return_array) {
            return ['status' => 'Array Error'];
        } else {
            return 'Array Error';
        }
    }
}

$wordlist = [
    "aku suka kamu",
    "kamu suka aku",
    "siapa kamu",
    "gimana kamu",
];

$result = find($wordlist, true);

print_r($result);
echo "\n";