<?php


$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];


$reponses = [1, 2, 3, 1, 3];
$score = 0;

$NB_QUESTIONS = count($questions);

for($i = 0; $i < $NB_QUESTIONS; $i++){
    echo "Question : \n".$questions[$i]."\n";

    $réponse1=trim(fgets(STDIN));


if ($réponse1 == $reponses[$i]) {
        echo "suspennnce ! \nBravo ! \nLe score augmente de 10 \n";
        $score=$score+10;
        echo "votre score est de $score \n";
        }
        else{
        echo "Suspennnce !\nNON !\nLe score n'augmente pas :( \n";
    echo "votre score est de $score\n";
        }

    echo "La bonne réponse : ".$reponses[$i]."\n";

    
} 
$score1=$score/50 * 100;

if ($score1 >= 50) {

echo "Bravo ! vous avez un score de : $score1 %\n";
}
else{
    echo "OUPS ! votre score est de : $score1 % vous n'avez pas dépassé la barre des 50% de bonnes réponses\n";
}
echo "GAME OVER\n";