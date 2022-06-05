<?php

namespace Faker\AlgeriaProvider\fr_DZ;

class Person extends \Faker\Provider\Person {
    
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
    ];

    protected static $firstNameMale = [
        'Mohammed', 'Amine', 'Samir', 'Mounir', 'Abdou', 'Ahmed', 'Salah', 'Oussama', 'Zakaria', 'Omar', 'Chabane',
        'Youcef', 'Lotfi', 'Messaoud', 'Islam', 'Yacine', 'Adel', 'Sami', 'Abderrahmane', 'Fodil', 'Nassim', 'Taha',
        'Mouloud', 'Mehdi', 'Walid', 'Salim', 'Ilyes', 'Nadir', 'Khalil', 'Fateh', 'Hamza', 'Akram', 'Anis',
        'Ayoub', 'Aymen', 'Bilel', 'Ibrahim', 'Abdelaziz', 'Djamel', 'Abdelkader', 'Farid', 'Malik', 'Mustapha', 'Moussa', 'Hocine',
        'Yahia', 'Khaled', 'Adam', 'Raouf', 'Ali', 'Mourad',
    ];

    protected static $firstNameFemale = [
        'Yasmine', 'Imene', 'Sabrina', 'Ines', 'Lina', 'Sarah', 'Melissa', 'Nour', 'Asma', 'Houda',
        'Amina', 'Chiraz', 'Célia', 'Dounia', 'Rania', 'Manel', 'Meriem', 'Amel', 'Maria', 'Farah',
        'Mira', 'Feriel', 'Lisa', 'Selma', 'Fouzia', 'Rym', 'Dalia', 'Samira', 'Maya', 'Thinhinane',
        'Aya', 'Hadjer', 'Ikram', 'Narimane', 'Ilham', 'Nedjma', 'Serine', 'Katia', 'Khadidja', 'Souad',
        'Fatima', 'Zina', 'Soumia', 'Farida', 'Hanane', 'Leyla', 'Djamila', 'Ryma', 'Sophia', 'Bouchra',
        'Hania', 'Malak', 'Hayat', 'Zineb', 'Batoul', 'Nesrine', 'Yousra', 'Marwa', 'Douaa',
        'Nawel',
    ];

    protected static $lastName = [
        'Saidi', 'Slimani', 'Touati', 'Mansouri', 'Brahimi', 'Messaoudi', 'Haddad', 'Yahiaoui', 'Rahmani', 'Dahmani', 'Sahraoui', 'Benaissa',
        'Moussaoui', 'Salhi', 'Bouziane', 'Saadi', 'Aissaoui', 'Benyahia', 'Belhadj', 'Amara', 'Abbas', 'Merabet', 'Mokhtari', 'Taleb', 'Bouzid',
        'Mebarki', 'Khaldi', 'Bouzidi', 'Hadji', 'Zitouni', 'Hamdi', 'Hamidi', 'Talbi', 'Cherifi', 'Kadri', 'Bouras', 'Abed', 'Toumi', 'Belaid',
        'Benali', 'Achour', 'Taibi', 'Chaib', 'Larbi', 'Chergui', 'Ziani', 'Nasri', 'Madani', 'Belarbi', 'Yousfi', 'Kadi', 'Boukhalfa', 'Abid',
        'Gasmi', 'Bensalem', 'Abdelli', 'Amari', 'Azzouz', 'Zaidi', 'Arab', 'Meziane', 'Daoudi', 'Amrani', 'Khelifa', 'Cherif', 'Zaoui', 'Ameur',
        'Zerrouki', 'Soltani', 'Hassani', 'Belkacem', 'Hachemi', 'Khelifi', 'Salmi', 'Rahal', 'Benamara', 'Mahmoudi', 'Ziane', 'Hamadi', 'Ayad',
        'Dahmane', 'Boukhari', 'Abdi', 'Mansour', 'Dib', 'Laib', 'Zouaoui', 'Daoud', 'Gacem', 'Chabane', 'Ferhat', 'Ramdani', 'Benahmed', 'Hamza',
        'Latreche', 'Benamar', 'Rahmouni', 'Houari', 'Bensaid', 'Saoudi', 'Abdellaoui', 'Dif', 'Seddiki', 'Boudraa', 'Kaddour', 'Gharbi', 'Berkane',
        'Lamri', 'Boumaza', 'Makhlouf', 'Sayah', 'Bouaziz', 'Azizi', 'Mokrani', 'Abbes', 'Laouar', 'Makhloufi', 'Abbou', 'Kara', 'Said', 'Miloudi',
        'Belkacemi', 'Brahmi', 'Abdelaziz', 'Saidani', 'Mohammedi', 'Amrane', 'Benaouda', 'Ouali', 'Belaidi', 'Aissani', 'Meziani', 'Allali',
        'Boudjemaa', 'Benyoucef', 'Zidane', 'Merah', 'Nouri', 'Fellah', 'Senouci', 'Kebaili', 'Loucif', 'Bouchareb', 'Guendouz', 'Lakhal', 'Hadjadj',
        'Mekki', 'Yahia', 'Djoudi', 'Belkadi', 'Chaoui', 'Adda', 'Djebbar', 'Bahloul', 'Touil', 'Boussaid', 'Bouguerra', 'Lakhdari', 'Berkani',
        'Ammari', 'Hamzaoui', 'Salah', 'Boutaleb', 'Gherbi', 'Hamel', 'Hammadi', 'Salem', 'Bakhti', 'Zeroual', 'Henni', 'Naili', 'Merzoug', 'Bahri',
        'Bouazza', 'Yahi', 'Tahri', 'Meddah', 'Hamoudi', 'Mazouz', 'Laribi', 'Moulay', 'Bouali', 'Malki', 'Charef', 'Boubekeur', 'Abbad', 'Belkheir',
        'Bekkouche', 'Guessoum', 'Bensalah', 'Amri', 'Benameur', 'Bacha', 'Merzougui', 'Belkhiri', 'Sellami', 'Mihoubi', 'Boualem', 'Kaci', 'Sahli',
        'Boumediene', 'Bouafia', 'Benmoussa', 'Moussa', 'Mimouni', 'Benyamina', 'Mahi', 'Mokrane', 'Otmani', 'Ghazi', 'Rabhi', 'Hocine', 'Achouri',
        'Cheikh', 'Rahmoune', 'Djellal', 'Fares', 'Ayadi', 'Chibani', 'Bourahla', 'Nouar', 'Kaddouri', 'Chikh', 'Bey', 'Khaled', 'Hamadouche', 'Kebir',
        'Boucetta', 'Baghdadi', 'Derouiche', 'Sabri', 'Derbal', 'Khelil', 'Benabdellah', 'Rais', 'Abbassi', 'Lakehal', 'Maouche', 'Meftah',
        'Bounab', 'Attia', 'Filali', 'Belbachir', 'Mazouzi', 'Menad', 'Ikhlef', 'Saad', 'Haddouche', 'Mokadem', 'Nacer', 'Hamdani', 'Abada',
        'Tahraoui', 'Madi', 'Morsli', 'Kouidri', 'Smail', 'Amrouche', 'Mesbah', 'Bettahar', 'Khadir', 'Tabet', 'Bouchama', 'Allal', 'Medjahed',
        'Saci', 'Derkaoui', 'Ouchene', 'Khelif', 'Boudiaf', 'Malek', 'Soudani', 'Lahmar', 'Benaicha', 'Bencheikh', 'Benziane', 'Lounis',
        'Boukhatem', 'Abdou', 'Bouabdellah', 'Rabia', 'Benslimane', 'Nedjar', 'Aribi', 'Aberkane', 'Kamel', 'Belkhir', 'Mahdi', 'Sahnoune',
        'Sid', 'Hammoudi', 'Sebti', 'Mehdi', 'Benbrahim', 'Abidi', 'Idir', 'Hasnaoui', 'Chaouche', 'Ouadah', 'Ghoul', 
    ];

    protected static $titleMale = ['M.', 'Dr.', 'Pr.'];

    protected static $titleFemale = ['Mme.', 'Mlle', 'Dr.', 'Pr.'];

}