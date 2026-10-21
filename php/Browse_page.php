<?php
// Browse page data API and fallback page route.

$morePets = [
    ['name' => 'Coco', 'type' => 'Dog', 'img' => 'images/pet/coco.jpg', 'location' => 'Baguio', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Daisy', 'type' => 'Dog', 'img' => 'images/pet/daisy.jpg', 'location' => 'Cebu City', 'breed' => 'Beagle', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Oreo', 'type' => 'Dog', 'img' => 'images/pet/oreo.jpg', 'location' => 'Manila', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Willow', 'type' => 'Dog', 'img' => 'images/pet/willow.jpg', 'location' => 'Cagayan de Oro', 'breed' => 'Beagle', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Bambi', 'type' => 'Dog', 'img' => 'images/pet/bambi.jpg', 'location' => 'Baguio', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Momo', 'type' => 'Dog', 'img' => 'images/pet/Momo.jpg', 'location' => 'Cebu City', 'breed' => 'Beagle', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Nuggets', 'type' => 'Dog', 'img' => 'images/pet/Nugget.jpg', 'location' => 'Manila', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Tofu', 'type' => 'Dog', 'img' => 'images/pet/Tofu.jpg', 'location' => 'Cagayan de Oro', 'breed' => 'Beagle', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Waffle', 'type' => 'Dog', 'img' => 'images/pet/waffle.jpg', 'location' => 'Baguio', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Patch', 'type' => 'Dog', 'img' => 'images/pet/patch.jpg', 'location' => 'Cebu City', 'breed' => 'Beagle', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Sprout', 'type' => 'Dog', 'img' => 'images/pet/sprout.jpg', 'location' => 'Manila', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Tinker', 'type' => 'Dog', 'img' => 'images/pet/tinker.jpg', 'location' => 'Cagayan de Oro', 'breed' => 'Beagle', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Poppy', 'type' => 'Dog', 'img' => 'images/pet/Poppy.jpg', 'location' => 'Baguio', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Twinkle', 'type' => 'Dog', 'img' => 'images/pet/Twinkle.jpg', 'location' => 'Cebu City', 'breed' => 'Beagle', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Chippy', 'type' => 'Dog', 'img' => 'images/pet/Chippy.jpg', 'location' => 'Manila', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Sunny', 'type' => 'Dog', 'img' => 'images/pet/Sunny.jpg', 'location' => 'Cagayan de Oro', 'breed' => 'Beagle', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Clover', 'type' => 'Dog', 'img' => 'images/pet/Clover.jpg', 'location' => 'Baguio', 'breed' => 'Beagle', 'age' => 'Puppy', 'gender' => 'Female'],
    ['name' => 'Bobs', 'type' => 'Rabbit', 'img' => 'images/pet/bob.jpg', 'location' => 'Quezon City', 'breed' => 'Local/Native Mix', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'Pennu', 'type' => 'Rabbit', 'img' => 'images/pet/pennu.jpg', 'location' => 'Cebu City', 'breed' => 'Netherland Dwarf', 'age' => 'Baby', 'gender' => 'Female'],
    ['name' => 'Nakba', 'type' => 'Rabbit', 'img' => 'images/pet/nakba.jpg', 'location' => 'Davao City', 'breed' => 'Holland Lop', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Jasper', 'type' => 'Rabbit', 'img' => 'images/pet/jasper.jpg', 'location' => 'Baguio', 'breed' => 'Mini Rex', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Mango', 'type' => 'Rabbit', 'img' => 'images/pet/mango.jpg', 'location' => 'Iloilo City', 'breed' => 'Lionhead', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'Ruby', 'type' => 'Rabbit', 'img' => 'images/pet/ruby.jpg', 'location' => 'Cagayan de Oro', 'breed' => 'Local/Native Mix', 'age' => 'Baby', 'gender' => 'Female'],
    ['name' => 'Pipe', 'type' => 'Rabbit', 'img' => 'images/pet/pipe.jpg', 'location' => 'Bacolod', 'breed' => 'Netherland Dwarf', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Cinna', 'type' => 'Rabbit', 'img' => 'images/pet/cinna.jpg', 'location' => 'Manila', 'breed' => 'Holland Lop', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Louie', 'type' => 'Rabbit', 'img' => 'images/pet/louie.jpg', 'location' => 'Quezon City', 'breed' => 'Mini Rex', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'Olive', 'type' => 'Rabbit', 'img' => 'images/pet/olive.jpg', 'location' => 'Cebu City', 'breed' => 'Lionhead', 'age' => 'Baby', 'gender' => 'Female'],
    ['name' => 'Polca', 'type' => 'Rabbit', 'img' => 'images/pet/polca.jpg', 'location' => 'Davao City', 'breed' => 'Local/Native Mix', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Bubble', 'type' => 'Rabbit', 'img' => 'images/pet/bubble.jpg', 'location' => 'Baguio', 'breed' => 'Netherland Dwarf', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Marshal', 'type' => 'Rabbit', 'img' => 'images/pet/marshal.jpg', 'location' => 'Iloilo City', 'breed' => 'Holland Lop', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'Latte', 'type' => 'Bird', 'img' => 'images/pet/Latte.jpg', 'location' => 'Manila', 'breed' => 'Cockatiel', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Chai', 'type' => 'Bird', 'img' => 'images/pet/chai.jpg', 'location' => 'Quezon City', 'breed' => 'Lovebirds', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Merry', 'type' => 'Bird', 'img' => 'images/pet/Merry.jpg', 'location' => 'Cebu City', 'breed' => 'Finch', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'CrumbleBean', 'type' => 'Bird', 'img' => 'images/pet/crumble.jpg', 'location' => 'Davao City', 'breed' => 'African Gray', 'age' => 'Baby', 'gender' => 'Female'],
    ['name' => 'Ducky', 'type' => 'Bird', 'img' => 'images/pet/ducky.jpg', 'location' => 'Baguio', 'breed' => 'Conure', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Abby', 'type' => 'Bird', 'img' => 'images/pet/abby.jpg', 'location' => 'Iloilo City', 'breed' => 'Budgerigar', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Mebo', 'type' => 'Bird', 'img' => 'images/pet/Mebo.jpg', 'location' => 'Cagayan de Oro', 'breed' => 'Cockatiel', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'Nolla', 'type' => 'Bird', 'img' => 'images/pet/nolla.jpg', 'location' => 'Bacolod', 'breed' => 'Lovebirds', 'age' => 'Baby', 'gender' => 'Female'],
    ['name' => 'Oliver', 'type' => 'Bird', 'img' => 'images/pet/oliver.jpg', 'location' => 'Manila', 'breed' => 'Finch', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Cola', 'type' => 'Bird', 'img' => 'images/pet/cola.jpg', 'location' => 'Quezon City', 'breed' => 'African Gray', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Nona', 'type' => 'Bird', 'img' => 'images/pet/nona.jpg', 'location' => 'Cebu City', 'breed' => 'Conure', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'Matcha', 'type' => 'Bird', 'img' => 'images/pet/matcha.jpg', 'location' => 'Davao City', 'breed' => 'Budgerigar', 'age' => 'Baby', 'gender' => 'Female'],
    ['name' => 'Sonny', 'type' => 'Bird', 'img' => 'images/pet/Sonny.jpg', 'location' => 'Baguio', 'breed' => 'Cockatiel', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Dada', 'type' => 'Bird', 'img' => 'images/pet/Dada.jpg', 'location' => 'Iloilo City', 'breed' => 'Lovebirds', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Chichi', 'type' => 'Bird', 'img' => 'images/pet/chichi.jpg', 'location' => 'Cagayan de Oro', 'breed' => 'Finch', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'Wally', 'type' => 'Bird', 'img' => 'images/pet/wally.jpg', 'location' => 'Bacolod', 'breed' => 'African Gray', 'age' => 'Baby', 'gender' => 'Female'],
    ['name' => 'Nana', 'type' => 'Bird', 'img' => 'images/pet/nana.jpg', 'location' => 'Manila', 'breed' => 'Conure', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Water', 'type' => 'Bird', 'img' => 'images/pet/water.jpg', 'location' => 'Quezon City', 'breed' => 'Budgerigar', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Puti', 'type' => 'Bird', 'img' => 'images/pet/puti.jpg', 'location' => 'Cebu City', 'breed' => 'Cockatiel', 'age' => 'Senior', 'gender' => 'Male'],
    ['name' => 'Max', 'type' => 'Bird', 'img' => 'images/pet/max.jpg', 'location' => 'Davao City', 'breed' => 'Lovebirds', 'age' => 'Baby', 'gender' => 'Female'],
    ['name' => 'Shine', 'type' => 'Bird', 'img' => 'images/pet/shine.jpg', 'location' => 'Baguio', 'breed' => 'Finch', 'age' => 'Young', 'gender' => 'Male'],
    ['name' => 'Shimmer', 'type' => 'Bird', 'img' => 'images/pet/shimmer.jpg', 'location' => 'Iloilo City', 'breed' => 'African Gray', 'age' => 'Adult', 'gender' => 'Female'],
    ['name' => 'Zuma', 'type' => 'Bird', 'img' => 'images/pet/zuma.jpg', 'location' => 'Cagayan de Oro', 'breed' => 'Conure', 'age' => 'Senior', 'gender' => 'Male'],
];

function getAvailablePetImagePaths() {
    $availablePetImagePaths = [];
    $petImageDirectory = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . 'images';
    if (is_dir($petImageDirectory)) {
        $imageFiles = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($petImageDirectory, FilesystemIterator::SKIP_DOTS)
        );
        foreach ($imageFiles as $imageFile) {
            if (!$imageFile->isFile() || !in_array(strtolower($imageFile->getExtension()), ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif'], true)) {
                continue;
            }

            $relativePath = substr($imageFile->getPathname(), strlen($petImageDirectory) + 1);
            $availablePetImagePaths[] = '../photos/images/' . implode('/', array_map(
                'rawurlencode',
                explode(DIRECTORY_SEPARATOR, $relativePath)
            ));
        }
    }
    return $availablePetImagePaths;
}

// API endpoint requested by Browse_page.html.
if (isset($_GET['action']) && $_GET['action'] === 'get_pets') {
    $availableImages = getAvailablePetImagePaths();
    $pets = $morePets;
    $availableImageLookup = array_fill_keys(array_map('strtolower', $availableImages), true);
    foreach ($pets as &$pet) {
        $imagePath = '../photos/' . implode('/', array_map('rawurlencode', explode('/', $pet['img'])));
        $pet['img'] = isset($availableImageLookup[strtolower($imagePath)]) ? $imagePath : '';
    }
    unset($pet);

    header('Content-Type: application/json');
    echo json_encode([
        'pets' => $pets,
        'availableImages' => $availableImages
    ], JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
    exit;
}

header('Location: ../Html/Browse_page.html');
exit;