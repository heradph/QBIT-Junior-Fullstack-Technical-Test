<?php 

$fruits = [
  [
    'fruitId' => 1,
    'fruitName' => "Apel",
    'fruitType' => "IMPORT",
    'stock' => 10,
  ],
  [
    'fruitId' => 2,
    'fruitName' => "Kurma",
    'fruitType'=> "IMPORT",
    "stock" => 20,
  ],
  [
    'fruitId' => 3,
    'fruitName' => "apel",
    'fruitType' => "IMPORT",
    'stock' => 50,
  ],
  [
    'fruitId' => 4,
    'fruitName' => "MANGGIS",
    'fruitType' => "LOCAL",
    'stock' => 100,
  ],
  [
    'fruitId' => 5,
    'fruitName' => "Jeruk Bali",
    'fruitType' => "LOCAL",
    'stock' => 10,
  ],
  [
    'fruitId' => 5,
    'fruitName' => "KURMA",
    'fruitType' => "IMPORT",
    'stock' => 20,
  ],
  [
    'fruitId' => 5,
    'fruitName' => "Salak",
    'fruitType' => "LOCAL",
    'stock' => 150,
  ],
];


// no.1
function getFruitName($fruits){
  foreach ($fruits as $fruit){
    $fruitNames[] = $fruit['fruitName'];
  }

  return $fruitNames;
}

$names = getFruitName($fruits);

echo "nama buah: ";
foreach ($names as $name){
  echo "$name ";
}

// no.2
function getFruitType($fruits){
  foreach ($fruits as $fruit){
    $fruitTypes[] = $fruit['fruitType'];
  }
  
  $uniqueTypes = array_unique($fruitTypes);

  return $uniqueTypes;
}

$Types = count(getFruitType($fruits));
echo "\nJumlah Wadah: $Types";

function getFruitNameByType($fruits){
  $type = [
    "LOCAL" => [],
    "IMPORT" => []
  ];

  foreach ($fruits as $fruit){
    $fruitTypes = $fruit['fruitType'];
    $type[$fruitTypes][] = $fruit['fruitName'];
  }
  
  return $type;
}

$nameByType = getFruitNameByType($fruits);
echo "\nWadah 1: ";
foreach ($nameByType['LOCAL'] as $name){
  echo "$name ";
}
echo "\nWadah 2: ";
foreach ($nameByType['IMPORT'] as $name){
  echo "$name ";
}

//no.3
function getFruitStock($fruits){
  $type = [
    "LOCAL" => 0,
    "IMPORT" => 0
  ];

  foreach($fruits as $fruit){
    $fruitTypes = $fruit['fruitType'];
    $type[$fruitTypes] += $fruit['stock'];
  }

  return $type;
}

$totalStock = getFruitStock($fruits);
echo "\nTotal Stock Wadah 1: ";
echo $totalStock['LOCAL'];
echo "\nTotal Stock Wadah 2: ";
echo $totalStock['IMPORT'];

// no.4
// ada beberapa fruitId yang sama, bisa membuat data jadi clash karena kesamaan id, susah banget! kebiasa main di framework 











// function getFruitName(fruits: IFruit[]): string[] {
//   const map = new Map<string, string>();

//   for (const fruit of fruits) {
//     const key = fruit.fruitName.toLowerCase();
//     if (!map.has(key)) {
//       map.set(key, fruit.fruitName);
//     }
//   }

//   return Array.from(map.values());
// }

// console.log("Nama Buah:", getFruitName(fruits));

// function getFruitType(fruits: IFruit[]): string[]{
//     const result:
// }
