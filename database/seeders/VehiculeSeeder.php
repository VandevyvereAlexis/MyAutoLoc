<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicule;            // importe la classe "Vehicule"

class VehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // AUDI
        Vehicule::create([
            'marque'            => 'Audi',
            'modele'            => 'A1',
            'annee'             => '2018',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-08-12',
            'immatriculation'   => 'BG-234-JG',
            'kilometrage'       => 12000,
            'nombre_places'     => 5,
            'prix'              => 32,
            'categorie_id'      => 1,
            'adresse_id'        => 1,
            'user_id'           => 1,
            'description'       =>

                "Location d'une Audi A1 - Confort et Style Réunis!<br><br>

                Bonjour à tous les amateurs de conduite élégante et dynamique,<br><br>
            
                Si vous recherchez une expérience de conduite exceptionnelle associée au confort et au style, ne cherchez pas plus loin! Je mets en location ma magnifique Audi A1, modèle de 2018. Avec seulement 12 000 km au compteur, cette voiture est comme neuve et n'attend que vous pour de nouvelles aventures sur la route.<br><br>
            
                Caractéristiques clés :<br><br>
            
                Marque : Audi<br>
                Modèle : A1<br>
                Année : 2018<br>
                Carburant : Essence<br>
                Kilométrage : 12 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                Cette Audi A1 incarne l'alliance parfaite entre performance et élégance. Dotée d'une esthétique moderne et de lignes dynamiques, elle est idéale pour vos déplacements en ville aussi bien que pour de plus longues excursions. Son intérieur spacieux peut accueillir confortablement jusqu'à cinq passagers, et son coffre généreux offre suffisamment d'espace pour vos bagages et vos achats.<br><br>
            
                Tarif : 32 € par jour<br><br>
                
                Disponibilité : La voiture est disponible dès maintenant pour rendre vos déplacements aussi agréables que possible.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 12 août 2025, vous garantissant une expérience de conduite en toute sécurité.<br><br>
                
                Immatriculation : BG-234-JG<br><br>
                
                N'hésitez pas à me contacter si vous souhaitez réserver cette Audi A1 pour votre prochaine aventure. Que ce soit pour une escapade en ville, un voyage d'affaires ou une escapade le week-end, cette voiture vous procurera une expérience de conduite exceptionnelle à chaque instant.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette superbe Audi A1!<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Audi',
            'modele'            => 'A3',
            'annee'             => '2020',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-10-03',
            'immatriculation'   => 'HG-284-DG',
            'kilometrage'       => 7500,
            'nombre_places'     => 5,
            'prix'              => 53,
            'categorie_id'      => 2,
            'adresse_id'        => 2,
            'user_id'           => 2,
            'description'       => 

                "Location d'une Audi A3 - Luxe, Performance et Confort Réunis!<br><br>

                Chers passionnés d'automobile et de conduite raffinée,<br><br>
                
                Laissez-moi vous présenter une occasion exceptionnelle de vivre une expérience de conduite de premier ordre. Ma somptueuse Audi A3, modèle de l'année 2020, est maintenant disponible à la location. Avec seulement 7 500 km au compteur, cette voiture incarne le luxe, la performance et le confort à leur apogée.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Audi<br>
                Modèle : A3<br>
                Année : 2020<br>
                Carburant : Essence<br>
                Kilométrage : 7 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                L'Audi A3 est synonyme d'élégance intemporelle et de conduite sportive. Son design extérieur captivant est associé à un habitacle raffiné où chaque détail a été soigneusement pensé pour offrir une expérience de conduite sans pareille. Que vous rouliez en ville ou que vous vous aventuriez sur de longues routes, l'Audi A3 répondra à toutes vos attentes en matière de confort, de sécurité et de performance.<br><br>
                
                Tarif : 53 € par jour<br><br>
                
                Disponibilité : Cette merveille automobile est prête à vous accompagner dans toutes vos escapades dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 3 octobre 2024, garantissant des trajets en toute tranquillité.<br><br>
                
                Immatriculation : HG-284-DG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver votre période de location et profiter de l'expérience Audi A3. Que ce soit pour impressionner lors d'un événement spécial, pour un voyage d'affaires ou pour explorer de nouveaux horizons, cette voiture répondra à tous vos besoins en matière de luxe et de performance.<br><br>
                
                Remarque : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous savoir au volant de cette Audi A3 d'exception !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Audi',
            'modele'            => 'A4',
            'annee'             => '2015',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2026-05-21',
            'immatriculation'   => 'BG-583-AG',
            'kilometrage'       => 21500,
            'nombre_places'     => 5,
            'prix'              => 56,
            'categorie_id'      => 5,
            'adresse_id'        => 3,
            'user_id'           => 3,
            'description'       => 

                "Location d'une Audi A4 - Élégance, Confort et Performances au Rendez-vous!<br><br>

                Chers amateurs de conduite sophistiquée et de prestige,<br><br>
            
                C'est avec un grand plaisir que je vous offre la possibilité de louer une véritable icône de l'automobile : l'Audi A4. En tant que modèle de l'année 2015, cette berline exceptionnelle allie à la perfection élégance, confort et performances de haut niveau. Avec seulement 21 500 km au compteur, cette Audi A4 est prête à vous offrir une expérience de conduite inoubliable.<br><br>
            
                Caractéristiques clés :<br><br>
                
                Marque : Audi<br>
                Modèle : A4<br>
                Année : 2015<br>
                Carburant : Diesel<br>
                Kilométrage : 21 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                L'Audi A4 incarne le summum de l'élégance et du confort. Son design extérieur intemporel est combiné à un intérieur luxueux et ergonomique qui garantit une conduite détendue, que ce soit pour des trajets en ville ou des aventures sur autoroute. La puissance de son moteur diesel associée à la réputation légendaire d'Audi en matière de tenue de route offre une expérience de conduite raffinée et dynamique.<br><br>
                
                Tarif : 56 € par jour<br><br>
                
                Disponibilité : Cette Audi A4 est prête à vous emmener vers de nouveaux horizons dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 21 mai 2026, garantissant votre sécurité sur la route.<br><br>
                
                Immatriculation : BG-583-AG<br><br>
                
                N'hésitez pas à me contacter pour réserver cette Audi A4 et vivre une expérience de conduite de première classe. Que vous planifiez un voyage d'affaires ou une escapade en famille, cette voiture répondra à toutes vos attentes en matière de luxe, de confort et de performances.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de cette Audi A4 prestigieuse !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Audi',
            'modele'            => 'A6',
            'annee'             => '2018',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-12-08',
            'immatriculation'   => 'YG-264-AG',
            'kilometrage'       => 9800,
            'nombre_places'     => 5,
            'prix'              => 78,
            'categorie_id'      => 5,
            'adresse_id'        => 4,
            'user_id'           => 4,
            'description'       => 
            
                "Location d'une Audi A6 - Luxe, Performance et Raffinement Exceptionnels!<br><br>

                Chers passionnés d'automobile et de sophistication,<br><br>
                
                Laissez-moi vous présenter une opportunité extraordinaire : la location de ma superbe Audi A6, modèle de 2018. Si vous recherchez une expérience de conduite marquée par le luxe, la performance et le raffinement, cette Audi A6 est la voiture de vos rêves. Avec seulement 9 800 km au compteur, elle offre une expérience de conduite qui redéfinit les normes de confort et d'élégance.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Audi<br>
                Modèle : A6<br>
                Année : 2018<br>
                Carburant : Diesel<br>
                Kilométrage : 9 800 km<br>
                Nombre de places : 5<br>
                Description :<br>
                L'Audi A6 incarne la quintessence du luxe et de la performance. Son design extérieur saisissant est complété par un intérieur somptueux qui allie technologie avancée et matériaux de qualité supérieure. Les sièges confortables et les équipements de pointe créent une ambiance où chaque détail est conçu pour offrir une expérience de conduite exquise, que vous soyez en ville ou sur l'autoroute.<br><br>
                
                Tarif : 78 € par jour<br><br>
                
                Disponibilité : Cette Audi A6 est prête à vous emmener vers de nouveaux horizons dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 8 décembre 2024, assurant votre sécurité et votre tranquillité d'esprit.<br><br>
                
                Immatriculation : YG-264-AG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Audi A6 et vivre une expérience de conduite sans pareille. Que ce soit pour un événement spécial, un voyage d'affaires ou simplement pour le plaisir de conduire une voiture d'exception, l'Audi A6 répondra à toutes vos attentes en matière de luxe, de performance et de prestige.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de cette Audi A6 prestigieuse !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Audi',
            'modele'            => 'Q2',
            'annee'             => '2020',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-08-15',
            'immatriculation'   => 'BJ-263-UG',
            'kilometrage'       => 33000,
            'nombre_places'     => 5,
            'prix'              => 45,
            'categorie_id'      => 7,
            'adresse_id'        => 5,
            'user_id'           => 5,
            'description'       => 
            
                "Location d'un Audi Q2 - Aventure, Confort et Polyvalence!<br><br>

                Chers aventuriers de la route et amateurs de confort,<br><br>
                
                J'ai le plaisir de vous présenter une occasion unique de louer un véhicule qui allie parfaitement aventure et élégance : l'Audi Q2. Cette version 2020 incarne le mélange idéal entre performance, confort et polyvalence. Avec seulement 33 000 km au compteur, elle vous attend pour une expérience de conduite qui marquera votre parcours.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Audi<br>
                Modèle : Q2<br>
                Année : 2020<br>
                Carburant : Diesel<br>
                Kilométrage : 33 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                L'Audi Q2 est conçue pour les esprits aventureux qui refusent de compromettre le confort. Son design extérieur audacieux s'harmonise avec un intérieur spacieux et ergonomique, offrant ainsi une expérience de conduite agréable aussi bien en ville que sur les routes plus longues. Cette voiture polyvalente vous permettra d'affronter tous les types de trajets avec aisance et style.<br><br>
                
                Tarif : 45 € par jour<br><br>
                
                Disponibilité : L'Audi Q2 est prête à vous accompagner dans vos escapades dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 15 août 2024, garantissant votre sécurité et votre tranquillité d'esprit.<br><br>
                
                Immatriculation : BJ-263-UG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Audi Q2 et vous lancer dans une aventure inoubliable. Que vous prévoyiez un voyage en famille, une escapade en montagne ou simplement une conduite agréable au quotidien, l'Audi Q2 répondra à tous vos besoins en matière de performance, de confort et de polyvalence.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous savoir au volant de cette Audi Q2 exceptionnelle !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Audi',
            'modele'            => 'Q3',
            'annee'             => '2018',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-02-06',
            'immatriculation'   => 'BS-674-DG',
            'kilometrage'       => 14500,
            'nombre_places'     => 5,
            'prix'              => 48,
            'categorie_id'      => 7,
            'adresse_id'        => 6,
            'user_id'           => 6,
            'description'       => 
            
                "Location d'un Audi Q3 - Confort, Style et Polyvalence à Votre Portée!<br><br>

                Chers amateurs de conduite élégante et de polyvalence,<br><br>
                
                J'ai le plaisir de vous offrir la possibilité de louer un véhicule qui incarne à la fois le confort, le style et la polyvalence : l'Audi Q3. Ce modèle de 2018 est la réponse à vos besoins de conduite au quotidien et d'aventures exceptionnelles. Avec seulement 14 500 km au compteur, cette Audi Q3 est prête à vous emmener vers de nouveaux horizons.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Audi<br>
                Modèle : Q3<br>
                Année : 2018<br>
                Carburant : Diesel<br>
                Kilométrage : 14 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                L'Audi Q3 vous offre une expérience de conduite harmonieuse alliant élégance et performance. Son design extérieur moderne est associé à un intérieur spacieux et bien conçu, offrant confort et praticité à chaque instant. Que vous traversiez la ville ou que vous vous aventuriez hors des sentiers battus, cette Audi Q3 sera votre compagne idéale.<br><br>
                
                Tarif : 48 € par jour<br><br>
                
                Disponibilité : Cette Audi Q3 est prête à enrichir vos trajets dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 6 février 2025, vous garantissant une conduite sûre et agréable.<br><br>
                
                Immatriculation : BS-674-DG<br><br>
                
                N'hésitez pas à me contacter pour réserver cette Audi Q3 et profiter d'une expérience de conduite exceptionnelle. Que vous ayez besoin d'une voiture pour vos déplacements quotidiens, vos escapades en famille ou vos voyages d'aventure, l'Audi Q3 répondra à toutes vos attentes en matière de confort, de style et de polyvalence.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Audi Q3 exceptionnelle !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Audi',
            'modele'            => 'Q5',
            'annee'             => '2021',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2026-06-29',
            'immatriculation'   => 'SG-225-AA',
            'kilometrage'       => 55000,
            'nombre_places'     => 5,
            'prix'              => 56,
            'categorie_id'      => 7,
            'adresse_id'        => 7,
            'user_id'           => 7,
            'description'       => 
            
                "Location d'un Audi Q5 - Luxe, Polyvalence et Performance de Dernière Génération!<br><br>

                Chers passionnés d'automobile et de raffinement,<br><br>
                
                J'ai le plaisir de vous présenter une occasion exceptionnelle : la location de ma superbe Audi Q5, modèle de 2021. Cette voiture incarne le luxe, la polyvalence et la performance à leur apogée. Avec 55 000 km au compteur, cette Audi Q5 est prête à vous emmener vers de nouvelles expériences de conduite.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Audi<br>
                Modèle : Q5<br>
                Année : 2021<br>
                Carburant : Diesel<br>
                Kilométrage : 55 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                L'Audi Q5 est un symbole de sophistication alliant design élégant, technologie de pointe et performance exceptionnelle. Son design extérieur esthétique est rehaussé par un intérieur spacieux et bien aménagé, offrant un confort et une expérience de conduite de haut niveau. Que vous exploriez la ville ou que vous vous aventuriez en pleine nature, cette Audi Q5 sera votre compagnon idéal.<br><br>
                
                Tarif : 56 € par jour<br><br>
                
                Disponibilité : L'Audi Q5 est prête à vous accompagner dans vos escapades dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 29 juin 2026, garantissant votre sécurité et votre tranquillité d'esprit.<br><br>
                
                Immatriculation : SG-225-AA<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Audi Q5 et découvrir le luxe et la performance à l'état pur. Que vous planifiiez un voyage en famille, une virée entre amis ou tout simplement une expérience de conduite exaltante, l'Audi Q5 répondra à toutes vos attentes en matière de confort, de polyvalence et de luxe.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Audi Q5 d'exception !<br><br>
                
                Cordialement",
        ]);





        // BMW
        Vehicule::create([
            'marque'            => 'BMW',
            'modele'            => 'Série 1',
            'annee'             => '2019',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-11-17',
            'immatriculation'   => 'FV-464-AH',
            'kilometrage'       => 28000,
            'nombre_places'     => 5,
            'prix'              => 34,
            'categorie_id'      => 1,
            'adresse_id'        => 8,
            'user_id'           => 8,
            'description'       => 
            
                "Location d'une BMW Série 1 - Plaisir de Conduite et Élégance au Rendez-vous!<br><br>

                Chers passionnés de conduite dynamique et de sophistication,<br><br>
                
                C'est avec enthousiasme que je vous propose de louer une véritable icône de l'automobile : la BMW Série 1. Ce modèle de 2019 incarne le plaisir de conduite et l'élégance à leur apogée. Avec seulement 28 000 km au compteur, cette BMW Série 1 est prête à vous offrir une expérience de conduite exceptionnelle.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : BMW<br>
                Modèle : Série 1<br>
                Année : 2019<br>
                Carburant : Essence<br>
                Kilométrage : 28 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La BMW Série 1 est la définition même du plaisir de conduite alliée à l'élégance. Son design extérieur dynamique est complété par un intérieur raffiné et confortable, offrant une expérience de conduite qui fera battre votre cœur à chaque trajet. Que ce soit pour des escapades urbaines ou des virées sur les routes panoramiques, cette BMW Série 1 sera votre partenaire de choix.<br><br>
                
                Tarif : 34 € par jour<br><br>
                
                Disponibilité : Cette BMW Série 1 est prête à vous emmener vers de nouveaux horizons dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 17 novembre 2024, garantissant votre sécurité et votre tranquillité d'esprit.<br><br>
                
                Immatriculation : FV-464-AH<br><br>
                
                N'hésitez pas à me contacter pour réserver cette BMW Série 1 et vivre une expérience de conduite qui vous marquera à jamais. Que vous souhaitiez impressionner lors d'un événement spécial, vous offrir une expérience de conduite de qualité ou simplement vous détendre au volant d'une voiture exceptionnelle, la BMW Série 1 répondra à toutes vos attentes.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de cette BMW Série 1 d'exception !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'BMW',
            'modele'            => 'Série 2',
            'annee'             => '2020',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-10-23',
            'immatriculation'   => 'BG-233-AF',
            'kilometrage'       => 4200,
            'nombre_places'     => 5,
            'prix'              => 43,
            'categorie_id'      => 2,
            'adresse_id'        => 9,
            'user_id'           => 9,
            'description'       => 
            
                "Location d'une BMW Série 2 - Élégance, Performance et Plaisir de Conduite!<br><br>

                Chers amateurs d'automobile et de raffinement,<br><br>
                
                C'est avec une grande excitation que je vous offre la possibilité de louer une voiture qui incarne l'élégance, la performance et le plaisir de conduite : la BMW Série 2. Cette version de 2020 allie à la perfection le style et la performance pour offrir une expérience de conduite inoubliable. Avec seulement 4 200 km au compteur, cette BMW Série 2 est prête à vous emmener vers de nouvelles aventures sur la route.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : BMW<br>
                Modèle : Série 2<br>
                Année : 2020<br>
                Carburant : Essence<br>
                Kilométrage : 4 200 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La BMW Série 2 est le mariage parfait entre élégance et performance. Son design extérieur raffiné est associé à un habitacle sophistiqué où chaque détail est pensé pour offrir une expérience de conduite supérieure. Que vous rouliez en ville ou que vous preniez la route pour de plus longues distances, cette BMW Série 2 vous offrira une conduite dynamique et confortable.<br><br>
                
                Tarif : 43 € par jour<br><br>
                
                Disponibilité : Cette BMW Série 2 est prête à rendre vos trajets plus agréables dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 23 octobre 2024, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : BG-233-AF<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette BMW Série 2 et vivre une expérience de conduite qui allie élégance et plaisir. Que ce soit pour une escapade en ville, un voyage d'affaires ou une virée en pleine nature, la BMW Série 2 répondra à toutes vos attentes en matière de style, de performance et de confort.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous savoir au volant de cette BMW Série 2 d'exception !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'BMW',
            'modele'            => 'Série 3',
            'annee'             => '2018',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-03-14',
            'immatriculation'   => 'HF-564-ZG',
            'kilometrage'       => 65000,
            'nombre_places'     => 5,
            'prix'              => 47,
            'categorie_id'      => 2,
            'adresse_id'        => 10,
            'user_id'           => 10,
            'description'       => 
            
                "Location d'une BMW Série 3 - Élégance, Performance et Confort Réunis!<br><br>

                Chers enthousiastes de conduite et d'élégance,<br><br>
                
                J'ai le plaisir de vous présenter une opportunité unique : la location de ma somptueuse BMW Série 3, modèle de 2018. Cette voiture incarne l'élégance, la performance et le confort à leur paroxysme. Avec 65 000 km au compteur, cette BMW Série 3 est prête à vous offrir une expérience de conduite exceptionnelle.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : BMW<br>
                Modèle : Série 3<br>
                Année : 2018<br>
                Carburant : Diesel<br>
                Kilométrage : 65 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La BMW Série 3 est un chef-d'œuvre d'élégance, de performance et de confort. Son design extérieur sophistiqué est associé à un intérieur spacieux et ergonomique, offrant une expérience de conduite inoubliable. Que vous rouliez en ville ou que vous preniez la route pour des aventures plus longues, cette BMW Série 3 vous comblera à chaque kilomètre parcouru.<br><br>
                
                Tarif : 47 € par jour<br><br>
                
                Disponibilité : Cette BMW Série 3 est prête à vous accompagner dans vos voyages dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 14 mars 2025, garantissant votre sécurité et votre tranquillité d'esprit.<br><br>
                
                Immatriculation : HF-564-ZG<br><br>
                
                N'hésitez pas à me contacter pour réserver cette BMW Série 3 et vivre une expérience de conduite d'exception. Que vous planifiiez une escapade en amoureux, un voyage d'affaires ou une virée entre amis, la BMW Série 3 répondra à toutes vos attentes en matière de luxe, de performance et de confort.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette BMW Série 3 prestigieuse !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'BMW',
            'modele'            => 'Série 4',
            'annee'             => '2020',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2026-01-11',
            'immatriculation'   => 'DG-467-HJ',
            'kilometrage'       => 18000,
            'nombre_places'     => 5,
            'prix'              => 55,
            'categorie_id'      => 5,
            'adresse_id'        => 11,
            'user_id'           => 11,
            'description'       => 
            
                "Location d'une BMW Série 4 - Luxe, Sportivité et Raffinement au Rendez-vous!<br><br>

                Chers adeptes de conduite dynamique et de sophistication,<br><br>
                
                C'est avec une grande joie que je vous propose de louer une voiture qui allie parfaitement luxe, sportivité et raffinement : la BMW Série 4. Ce modèle de 2020 incarne le style et la performance pour offrir une expérience de conduite exaltante. Avec seulement 18 000 km au compteur, cette BMW Série 4 est prête à vous emmener vers de nouvelles aventures sur la route.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : BMW<br>
                Modèle : Série 4<br>
                Année : 2020<br>
                Carburant : Diesel<br>
                Kilométrage : 18 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La BMW Série 4 incarne la parfaite fusion entre luxe et sportivité. Son design extérieur captivant est associé à un intérieur élégant et technologiquement avancé, offrant une expérience de conduite sans compromis. Que vous rouliez en ville ou que vous preniez la route pour des aventures plus longues, cette BMW Série 4 sera votre partenaire de confiance.<br><br>
                
                Tarif : 55 € par jour<br><br>
                
                Disponibilité : Cette BMW Série 4 est prête à rendre vos trajets plus agréables dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 11 janvier 2026, vous garantissant une conduite en toute sécurité.<br><br>
                
                Immatriculation : DG-467-HJ
                
                Je vous encourage à me contacter dès maintenant pour réserver cette BMW Série 4 et vivre une expérience de conduite qui marquera votre parcours. Que vous souhaitiez vivre une conduite sportive, impressionner lors d'un événement spécial ou simplement profiter du luxe au quotidien, la BMW Série 4 répondra à toutes vos attentes.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette BMW Série 4 d'exception !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'BMW',
            'modele'            => 'Série 5',
            'annee'             => '2020',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-07-05',
            'immatriculation'   => 'BT-346-GR',
            'kilometrage'       => 29500,
            'nombre_places'     => 5,
            'prix'              => 75,
            'categorie_id'      => 5,
            'adresse_id'        => 12,
            'user_id'           => 12,
            'description'       => 
            
                "Location d'une BMW Série 5 - Luxe, Performance et Élégance Redéfinis!<br><br>

                Chers amateurs d'automobile et de raffinement,<br><br>
                
                C'est avec un grand enthousiasme que je vous propose de louer une voiture qui incarne le luxe, la performance et l'élégance à leur apogée : la BMW Série 5. Ce modèle de 2020 réunit style et technologie pour vous offrir une expérience de conduite exceptionnelle. Avec seulement 29 500 km au compteur, cette BMW Série 5 est prête à vous emmener vers de nouvelles dimensions de confort et de plaisir de conduite.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : BMW<br>
                Modèle : Série 5<br>
                Année : 2020<br>
                Carburant : Diesel<br>
                Kilométrage : 29 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La BMW Série 5 allie à la perfection élégance, performance et confort. Son design extérieur sophistiqué est complété par un intérieur spacieux et haut de gamme, créant une ambiance de conduite empreinte de luxe. Que vous vous déplaciez en ville ou que vous vous aventuriez sur les routes panoramiques, cette BMW Série 5 sera votre refuge de raffinement et de puissance.<br><br>
                
                Tarif : 75 € par jour<br><br>
                
                Disponibilité : Cette BMW Série 5 est prête à vous accompagner dans vos trajets dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 5 juillet 2024, garantissant votre sécurité et votre sérénité lors de vos déplacements.<br><br>
                
                Immatriculation : BT-346-GR<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette BMW Série 5 et vivre une expérience de conduite inégalée. Que vous planifiiez un voyage d'affaires, une escapade en amoureux ou simplement une conduite confortable et raffinée, la BMW Série 5 répondra à toutes vos attentes.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette BMW Série 5 d'exception !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'BMW',
            'modele'            => 'X1',
            'annee'             => '2020',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2026-02-22',
            'immatriculation'   => 'TG-484-YG',
            'kilometrage'       => 87000,
            'nombre_places'     => 5,
            'prix'              => 63,
            'categorie_id'      => 7,
            'adresse_id'        => 13,
            'user_id'           => 13,
            'description'       => 
            
                "Location d'un BMW X1 - Aventure, Confort et Style Réunis!<br><br>

                Chers passionnés de conduite et d'aventure,<br><br>
                
                J'ai le plaisir de vous proposer une expérience de conduite exceptionnelle : la location de mon élégant BMW X1, modèle de 2020. Ce véhicule incarne l'aventure, le confort et le style pour une expérience de conduite inoubliable. Avec 87 000 km au compteur, ce BMW X1 est prêt à vous emmener vers de nouveaux horizons.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : BMW<br>
                Modèle : X1<br>
                Année : 2020<br>
                Carburant : Diesel<br>
                Kilométrage : 87 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                Le BMW X1 est conçu pour les esprits aventuriers qui ne compromettent pas le confort. Son design extérieur dynamique est assorti d'un intérieur raffiné et spacieux, offrant une expérience de conduite supérieure. Que vous exploriez la ville ou que vous vous aventuriez hors des sentiers battus, ce BMW X1 sera votre compagnon idéal.<br><br>
                
                Tarif : 63 € par jour<br><br>
                
                Disponibilité : Ce BMW X1 est prêt à vous accompagner dans vos aventures dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 22 février 2026, garantissant votre sécurité et votre tranquillité d'esprit.<br><br>
                
                Immatriculation : TG-484-YG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver ce BMW X1 et vous lancer dans une aventure de conduite inoubliable. Que vous planifiiez une escapade en montagne, une exploration en famille ou une conduite confortable au quotidien, ce BMW X1 répondra à tous vos besoins en matière de confort, d'aventure et de style.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de ce BMW X1 exceptionnel !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'BMW',
            'modele'            => 'X3',
            'annee'             => '2017',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-09-27',
            'immatriculation'   => 'YU-243-AP',
            'kilometrage'       => 5500,
            'nombre_places'     => 5,
            'prix'              => 75,
            'categorie_id'      => 7,
            'adresse_id'        => 14,
            'user_id'           => 14,
            'description'       => 
            
                "Location d'un BMW X3 - Puissance, Confort et Élégance à Votre Portée!<br><br>

                Chers passionnés de conduite et d'excellence,<br><br>
                
                C'est avec une grande fierté que je vous propose de louer une voiture qui incarne la puissance, le confort et l'élégance : le BMW X3, modèle de 2017. Ce véhicule est l'incarnation du luxe moderne, combinant la performance à la sophistication. Avec seulement 5 500 km au compteur, ce BMW X3 est prêt à vous offrir une expérience de conduite exceptionnelle.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : BMW<br>
                Modèle : X3<br>
                Année : 2017<br>
                Carburant : Essence<br>
                Kilométrage : 5 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                Le BMW X3 est la réponse aux attentes les plus élevées en matière de luxe et de performance. Son design extérieur dynamique est rehaussé par un intérieur élégant et ergonomique, offrant une expérience de conduite exquise. Que vous traversiez la ville ou que vous vous lanciez dans des aventures sur les routes, ce BMW X3 vous offrira une conduite exceptionnelle.<br><br>
                
                Tarif : 75 € par jour<br><br>
                
                Disponibilité : Ce BMW X3 est prêt à vous emmener vers de nouveaux horizons dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 27 septembre 2024, vous garantissant une conduite sûre et agréable.<br><br>
                
                Immatriculation : YU-243-AP<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver ce BMW X3 et découvrir la puissance, le confort et l'élégance sous un nouveau jour. Que vous planifiiez un voyage en famille, une escapade en amoureux ou une expérience de conduite exceptionnelle, ce BMW X3 répondra à toutes vos attentes en matière de luxe, de performance et de confort.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de ce BMW X3 exceptionnel !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'BMW',
            'modele'            => 'X5',
            'annee'             => '2018',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-12-01',
            'immatriculation'   => 'ZG-214-RG',
            'kilometrage'       => 41000,
            'nombre_places'     => 5,
            'prix'              => 88,
            'categorie_id'      => 7,
            'adresse_id'        => 15,
            'user_id'           => 15,
            'description'       => 
            
                "Location d'un BMW X5 - Luxe, Performance et Capacité Réunis!<br><br>

                Chers amateurs d'automobile et de raffinement,<br><br>
                
                C'est avec une grande joie que je vous propose de louer un SUV qui incarne le luxe, la performance et la capacité : le BMW X5, modèle de 2018. Ce véhicule est conçu pour allier le confort à la puissance, offrant une expérience de conduite exceptionnelle. Avec seulement 41 000 km au compteur, ce BMW X5 est prêt à vous emmener vers de nouvelles aventures sur la route.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : BMW<br>
                Modèle : X5<br>
                Année : 2018<br>
                Carburant : Diesel<br>
                Kilométrage : 41 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                Le BMW X5 est l'incarnation de la combinaison parfaite entre luxe, performance et capacité. Son design extérieur imposant est associé à un intérieur spacieux et raffiné, offrant une expérience de conduite inégalée. Que vous rouliez en ville ou que vous vous aventuriez hors des sentiers battus, ce BMW X5 sera votre allié de confiance.<br><br>
                
                Tarif : 88 € par jour<br><br>
                
                Disponibilité : Ce BMW X5 est prêt à vous accompagner dans vos voyages dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 1er décembre 2025, garantissant votre sécurité et votre tranquillité d'esprit.<br><br>
                
                Immatriculation : ZG-214-RG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver ce BMW X5 et vivre une expérience de conduite qui redéfinira vos attentes. Que vous planifiiez une excursion en montagne, une virée en famille ou simplement une conduite confortable au quotidien, ce BMW X5 répondra à toutes vos attentes en matière de luxe, de performance et de capacité.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de ce BMW X5 d'exception !<br><br>
                
                Cordialement",
        ]);





        // PEUGEOT
        Vehicule::create([
            'marque'            => 'Peugeot',
            'modele'            => '2008',
            'annee'             => '2019',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-05-09',
            'immatriculation'   => 'UY-674-TG',
            'kilometrage'       => 24000,
            'nombre_places'     => 5,
            'prix'              => 35,
            'categorie_id'      => 2,
            'adresse_id'        => 16,
            'user_id'           => 16,
            'description'       => 
            
                "Location d'une Peugeot 2008 - Confort, Économie et Polyvalence Réunis!<br><br>

                Chers passionnés de conduite et de praticité,<br><br>
                
                C'est avec enthousiasme que je vous propose de louer une voiture qui incarne le confort, l'économie et la polyvalence : la Peugeot 2008, modèle de 2019. Ce véhicule est conçu pour offrir une expérience de conduite agréable au quotidien. Avec seulement 24 000 km au compteur, cette Peugeot 2008 est prête à vous accompagner dans tous vos déplacements.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Peugeot<br>
                Modèle : 2008<br>
                Année : 2019<br>
                Carburant : Diesel<br>
                Kilométrage : 24 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Peugeot 2008 est conçue pour répondre à vos besoins de conduite quotidiens. Son design extérieur moderne est associé à un intérieur spacieux et bien équipé, offrant une expérience de conduite agréable. Que vous fassiez des courses en ville ou que vous preniez la route pour de plus longues distances, cette Peugeot 2008 sera votre fidèle compagne.<br><br>
                
                Tarif : 35 € par jour<br><br>
                
                Disponibilité : Cette Peugeot 2008 est prête à vous accompagner dans vos trajets dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 9 mai 2025, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : UY-674-TG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Peugeot 2008 et découvrir une conduite confortable et économique. Que vous vous rendiez au travail, fassiez des courses ou partiez en escapade, cette Peugeot 2008 répondra à tous vos besoins en matière de praticité et de polyvalence.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de cette Peugeot 2008 pratique et confortable !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Peugeot',
            'modele'            => '208',
            'annee'             => '2019',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2026-03-07',
            'immatriculation'   => 'RT-231-AG',
            'kilometrage'       => 37000,
            'nombre_places'     => 5,
            'prix'              => 28,
            'categorie_id'      => 1,
            'adresse_id'        => 17,
            'user_id'           => 17,
            'description'       => 
            
                "Location d'une Peugeot 208 - Agilité, Économie et Style Réunis!<br><br> 

                Chers amateurs de conduite et d'agilité urbaine,<br><br>
                
                C'est avec plaisir que je vous propose de louer une voiture qui incarne l'agilité, l'économie et le style : la Peugeot 208, modèle de 2019. Ce véhicule est conçu pour offrir une expérience de conduite plaisante en ville et au-delà. Avec seulement 37 000 km au compteur, cette Peugeot 208 est prête à vous accompagner dans vos aventures quotidiennes.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Peugeot<br>
                Modèle : 208<br>
                Année : 2019<br>
                Carburant : Essence<br>
                Kilométrage : 37 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Peugeot 208 combine agilité, économie et style pour une conduite citadine agréable. Son design extérieur dynamique est associé à un intérieur moderne et confortable, offrant une expérience de conduite pratique et plaisante. Que vous vous déplaciez en ville ou que vous preniez la route pour des escapades, cette Peugeot 208 vous fera bénéficier d'une conduite exceptionnelle.<br><br>
                
                Tarif : 28 € par jour<br><br>
                
                Disponibilité : Cette Peugeot 208 est prête à vous accompagner dans vos trajets dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 7 mars 2026, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : RT-231-AG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Peugeot 208 et découvrir une conduite agile, économique et stylée. Que vous rouliez en ville, fassiez des courses ou partiez en escapade, cette Peugeot 208 répondra à tous vos besoins en matière de conduite urbaine.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de cette Peugeot 208 élégante et pratique !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Peugeot',
            'modele'            => '3008',
            'annee'             => '2016',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-10-18',
            'immatriculation'   => 'YG-267-AG',
            'kilometrage'       => 12500,
            'nombre_places'     => 5,
            'prix'              => 45,
            'categorie_id'      => 6,
            'adresse_id'        => 18,
            'user_id'           => 18,
            'description'       => 
            
                "Location d'une Peugeot 3008 - Confort, Espace et Polyvalence au Rendez-vous!<br><br>

                Chers adeptes de la conduite et du confort moderne,<br><br>
                
                C'est avec enthousiasme que je vous propose de louer une voiture qui allie confort, espace et polyvalence : la Peugeot 3008, modèle de 2016. Ce véhicule est conçu pour offrir une expérience de conduite confortable et fonctionnelle, peu importe vos besoins. Avec seulement 12 500 km au compteur, cette Peugeot 3008 est prête à vous accompagner dans tous vos trajets.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Peugeot<br>
                Modèle : 3008<br>
                Année : 2016<br>
                Carburant : Diesel<br>
                Kilométrage : 12 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Peugeot 3008 offre un mélange réussi entre confort, espace et polyvalence. Son design extérieur élégant est assorti d'un intérieur spacieux et bien aménagé, offrant une expérience de conduite agréable pour tous les occupants. Que vous voyagiez en famille ou que vous partiez en escapade, cette Peugeot 3008 saura répondre à tous vos besoins.<br><br>
                
                Tarif : 45 € par jour<br><br>
                
                Disponibilité : Cette Peugeot 3008 est prête à vous emmener vers de nouvelles destinations dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 18 octobre 2025, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : YG-267-AG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Peugeot 3008 et profiter d'une expérience de conduite confortable et polyvalente. Que vous partiez en vacances, fassiez des courses ou voyagiez en groupe, cette Peugeot 3008 sera votre partenaire de conduite idéal.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de cette Peugeot 3008 fonctionnelle et spacieuse !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Peugeot',
            'modele'            => '308',
            'annee'             => '2013',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2026-04-19',
            'immatriculation'   => 'GD-232-TC',
            'kilometrage'       => 72000,
            'nombre_places'     => 5,
            'prix'              => 32,
            'categorie_id'      => 2,
            'adresse_id'        => 19,
            'user_id'           => 19,
            'description'       => 
            
                "Location d'une Peugeot 308 - Élégance, Économie et Conduite Agréable!<br><br>

                Chers amateurs de conduite et de confort,<br><br>
                
                C'est avec plaisir que je vous propose de louer une voiture qui allie élégance, économie et plaisir de conduite : la Peugeot 308, modèle de 2013. Ce véhicule est conçu pour offrir une expérience de conduite agréable et économique au quotidien. Avec 72 000 km au compteur, cette Peugeot 308 est prête à vous accompagner dans tous vos déplacements.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Peugeot<br>
                Modèle : 308<br>
                Année : 2013<br>
                Carburant : Diesel<br>
                Kilométrage : 72 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Peugeot 308 combine élégance et économie pour une conduite agréable au quotidien. Son design extérieur sophistiqué est assorti d'un intérieur confortable et bien aménagé, offrant une expérience de conduite plaisante pour tous les occupants. Que vous fassiez des trajets urbains ou que vous partiez en escapade, cette Peugeot 308 vous garantit une expérience de conduite agréable.<br><br>
                
                Tarif : 32 € par jour<br><br>
                
                Disponibilité : Cette Peugeot 308 est prête à vous emmener vers de nouvelles aventures dès aujourd'hui.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 19 avril 2026, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : GD-232-TC<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Peugeot 308 et découvrir une conduite agréable, économique et élégante. Que vous rouliez en ville, fassiez des trajets domicile-travail ou partiez en escapade, cette Peugeot 308 répondra à tous vos besoins en matière de confort et d'économie.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir au volant de cette Peugeot 308 élégante et pratique !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Peugeot',
            'modele'            => '5008',
            'annee'             => '2017',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-08-09',
            'immatriculation'   => 'MM-215-RT',
            'kilometrage'       => 15800,
            'nombre_places'     => 5,
            'prix'              => 53,
            'categorie_id'      => 6,
            'adresse_id'        => 20,
            'user_id'           => 20,
            'description'       => 
            
                "Location d'une Peugeot 5008 - Confort, Espace et Polyvalence Réunis!<br><br>

                Chers amateurs de conduite et d'aventure,<br><br>
                
                C'est avec enthousiasme que je vous propose de louer un véhicule qui allie confort, espace et polyvalence : la Peugeot 5008, modèle de 2017. Ce véhicule est conçu pour offrir une expérience de conduite confortable et spacieuse, adaptée à toutes vos aventures. Avec seulement 15 800 km au compteur, cette Peugeot 5008 est prête à vous emmener vers de nouvelles destinations.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Peugeot<br>
                Modèle : 5008<br>
                Année : 2017<br>
                Carburant : Diesel<br>
                Kilométrage : 15 800 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Peugeot 5008 offre un mélange parfait entre confort, espace et polyvalence. Son design extérieur moderne est assorti d'un intérieur spacieux et bien aménagé, offrant une expérience de conduite agréable pour tous les passagers. Que vous planifiiez un voyage en famille, une sortie entre amis ou une escapade en solo, cette Peugeot 5008 sera à la hauteur de vos attentes.<br><br>
                
                Tarif : 53 € par jour<br><br>
                
                Disponibilité : Cette Peugeot 5008 est prête à vous accompagner dans vos aventures dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 9 août 2024, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : MM-215-RT<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Peugeot 5008 et découvrir une conduite confortable, spacieuse et polyvalente. Que vous partiez en vacances, exploriez de nouveaux endroits ou fassiez simplement des trajets quotidiens, cette Peugeot 5008 répondra à tous vos besoins.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Peugeot 5008 exceptionnelle !<br><br>
                
                Cordialement",
        ]);





        // FIAT
        Vehicule::create([
            'marque'            => 'Fiat',
            'modele'            => '500',
            'annee'             => '2020',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-07-02',
            'immatriculation'   => 'GY-895-BF',
            'kilometrage'       => 31000,
            'nombre_places'     => 4,
            'prix'              => 24,
            'categorie_id'      => 1,
            'adresse_id'        => 21,
            'user_id'           => 21,
            'description'       => 
            
                "Location d'une Fiat 500 - Style, Économie et Conduite Citadine Réunis!<br><br>

                Chers amateurs de conduite urbaine et de praticité,<br><br>
                
                C'est avec plaisir que je vous propose de louer une voiture qui allie style, économie et conduite citadine : la Fiat 500, modèle de 2020. Ce véhicule est conçu pour offrir une expérience de conduite plaisante et économique en ville. Avec seulement 31 000 km au compteur, cette Fiat 500 est prête à vous emmener partout où vous le souhaitez.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Fiat<br>
                Modèle : 500<br>
                Année : 2020<br>
                Carburant : Diesel<br>
                Kilométrage : 31 000 km<br>
                Nombre de places : 4<br>
                Description :<br>
                La Fiat 500 allie style et économie pour une conduite citadine agréable. Son design extérieur emblématique est assorti d'un intérieur bien conçu, offrant une expérience de conduite plaisante pour vous et vos passagers. Que vous vous déplaciez en ville, cherchiez une place de parking ou fassiez des trajets courts, cette Fiat 500 sera votre partenaire idéal.<br><br>
                
                Tarif : 24 € par jour<br><br>
                
                Disponibilité : Cette Fiat 500 est prête à vous emmener où vous le souhaitez dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 2 juillet 2025, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : GY-895-BF<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Fiat 500 et découvrir une conduite urbaine stylée et économique. Que vous rouliez en ville, exploriez de nouveaux quartiers ou effectuiez des trajets courts, cette Fiat 500 répondra à tous vos besoins en matière de conduite citadine.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Fiat 500 au style unique !<br><br>
                
                Cordialement",
        ]);





        // SMART
        Vehicule::create([
            'marque'            => 'Smart',
            'modele'            => 'EQ fortwo',
            'annee'             => '2023',
            'energie'           => 'Electrique',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-09-14',
            'immatriculation'   => 'YI-356-PO',
            'kilometrage'       => 62000,
            'nombre_places'     => 2,
            'prix'              => 25,
            'categorie_id'      => 1,
            'adresse_id'        => 22,
            'user_id'           => 22,
            'description'       => 
            
                "Location d'une Smart EQ fortwo - Électrique, Compacte et Écologique!<br><br>

                Chers adeptes de la mobilité électrique et de la conduite urbaine,<br><br>
                
                C'est avec enthousiasme que je vous propose de louer une voiture qui allie technologie électrique, compacité et respect de l'environnement : la Smart EQ fortwo, modèle de 2023. Ce véhicule électrique est conçu pour offrir une expérience de conduite urbaine pratique, écologique et moderne. Avec 62 000 km au compteur, cette Smart EQ fortwo est prête à vous emmener partout où vous souhaitez vous rendre.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Smart<br>
                Modèle : EQ fortwo<br>
                Année : 2023<br>
                Carburant : Électrique<br>
                Kilométrage : 62 000 km<br>
                Nombre de places : 2<br>
                Description :<br>
                La Smart EQ fortwo est la quintessence de la mobilité électrique en milieu urbain. Son design compact et moderne s'accompagne d'une propulsion électrique silencieuse et respectueuse de l'environnement. Que vous vous déplaciez en ville, cherchiez un stationnement ou souhaitiez réduire votre empreinte carbone, cette Smart EQ fortwo sera votre alliée dans tous vos déplacements.<br><br>
                
                Tarif : 25 € par jour<br><br>
                
                Disponibilité : Cette Smart EQ fortwo est prête à vous emmener dans un futur urbain dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 14 septembre 2024, garantissant votre sécurité et celle de la planète lors de vos déplacements.<br><br>
                
                Immatriculation : YI-356-PO<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Smart EQ fortwo et découvrir une nouvelle ère de conduite urbaine électrique. Que vous vous rendiez au travail, fassiez des courses ou exploriez la ville, cette Smart EQ fortwo vous offrira une expérience de conduite innovante et respectueuse de l'environnement.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Smart EQ fortwo révolutionnaire !<br><br>
                
                Cordialement",
        ]);





        // RENAULT
        Vehicule::create([
            'marque'            => 'Renault',
            'modele'            => 'Clio',
            'annee'             => '2019',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2026-01-25',
            'immatriculation'   => 'QQ-299-FG',
            'kilometrage'       => 2800,
            'nombre_places'     => 5,
            'prix'              => 25,
            'categorie_id'      => 1,
            'adresse_id'        => 23,
            'user_id'           => 23,
            'description'       => 
            
                "Location d'une Renault Clio - Style, Confort et Conduite Polyvalente!<br><br>

                Chers amateurs de conduite et d'élégance,<br><br>
                
                C'est avec enthousiasme que je vous propose de louer une voiture qui allie style, confort et polyvalence : la Renault Clio, modèle de 2019. Ce véhicule est conçu pour offrir une expérience de conduite agréable et pratique au quotidien. Avec seulement 2 800 km au compteur, cette Renault Clio est prête à vous emmener partout où vous le souhaitez.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Renault<br>
                Modèle : Clio<br>
                Année : 2019<br>
                Carburant : Essence<br>
                Kilométrage : 2 800 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Renault Clio combine style et confort pour une conduite polyvalente au quotidien. Son design extérieur moderne est assorti d'un intérieur bien aménagé, offrant une expérience de conduite plaisante pour vous et vos passagers. Que vous fassiez des trajets courts en ville, partiez en escapade ou exploriez de nouveaux endroits, cette Renault Clio sera votre compagne idéale.<br><br>
                
                Tarif : 25 € par jour<br><br>
                
                Disponibilité : Cette Renault Clio est prête à vous emmener où vous le souhaitez dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 25 janvier 2026, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : QQ-299-FG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Renault Clio et découvrir une conduite stylée, confortable et polyvalente. Que vous rouliez en ville, partiez en week-end ou fassiez des trajets quotidiens, cette Renault Clio sera votre partenaire de conduite idéal.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Renault Clio élégante et pratique !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Renault',
            'modele'            => 'Captur',
            'annee'             => '2019',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-11-05',
            'immatriculation'   => 'RP-121-RH',
            'kilometrage'       => 48000,
            'nombre_places'     => 5,
            'prix'              => 45,
            'categorie_id'      => 1,
            'adresse_id'        => 24,
            'user_id'           => 24,
            'description'       => 
            
                "Location d'un Renault Captur - Confort, Polyvalence et Aventure!<br><br>

                Chers passionnés de conduite et de découvertes,<br><br>
                
                C'est avec joie que je vous propose de louer un véhicule qui allie confort, polyvalence et esprit d'aventure : le Renault Captur, modèle de 2019. Ce véhicule est conçu pour offrir une expérience de conduite agréable et pratique pour toutes vos escapades. Avec 48 000 km au compteur, ce Renault Captur est prêt à vous emmener vers de nouveaux horizons.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Renault<br>
                Modèle : Captur<br>
                Année : 2019<br>
                Carburant : Essence<br>
                Kilométrage : 48 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                Le Renault Captur offre un mélange parfait entre confort et polyvalence, idéal pour les aventuriers urbains et les explorateurs des routes. Son design extérieur dynamique est associé à un intérieur bien agencé, offrant une expérience de conduite agréable pour vous et vos compagnons. Que vous partiez en week-end, découvriez de nouveaux endroits ou fassiez des trajets quotidiens, ce Renault Captur sera votre partenaire idéal.<br><br>
                
                Tarif : 45 € par jour<br><br>
                
                Disponibilité : Ce Renault Captur est prêt à vous accompagner dans toutes vos aventures dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 5 novembre 2024, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : RP-121-RH<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver ce Renault Captur et découvrir une conduite confortable, polyvalente et pleine d'aventures. Que vous exploriez de nouvelles destinations, vous rendiez au travail ou partiez en week-end, ce Renault Captur vous accompagnera avec style et praticité.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de ce Renault Captur lors de vos prochaines escapades !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Renault',
            'modele'            => 'Espace',
            'annee'             => '2020',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-04-03',
            'immatriculation'   => 'NC-989-TG',
            'kilometrage'       => 19500,
            'nombre_places'     => 5,
            'prix'              => 63,
            'categorie_id'      => 6,
            'adresse_id'        => 25,
            'user_id'           => 25,
            'description'       => 
            
                "Location d'un Renault Espace - Confort, Espace et Polyvalence Réunis!<br><br>

                Chers amateurs de conduite spacieuse et de confort,<br><br>
                
                C'est avec enthousiasme que je vous propose de louer un véhicule qui allie confort, espace et polyvalence : le Renault Espace, modèle de 2020. Ce véhicule est conçu pour offrir une expérience de conduite spacieuse et agréable pour tous vos déplacements. Avec seulement 19 500 km au compteur, ce Renault Espace est prêt à vous emmener vers de nouveaux horizons.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Renault<br>
                Modèle : Espace<br>
                Année : 2020<br>
                Carburant : Diesel<br>
                Kilométrage : 19 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                Le Renault Espace est le choix parfait pour ceux qui recherchent une conduite spacieuse et confortable. Son design extérieur élégant est associé à un intérieur luxueux, offrant une expérience de conduite exceptionnelle pour vous et vos passagers. Que vous partiez en vacances en famille, fassiez des trajets longue distance ou simplement vous déplaciez en ville, ce Renault Espace répondra à tous vos besoins.<br><br>
                
                Tarif : 63 € par jour<br><br>
                
                Disponibilité : Ce Renault Espace est prêt à vous accompagner dans vos aventures dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 3 avril 2025, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : NC-989-TG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver ce Renault Espace et profiter d'une conduite spacieuse, confortable et polyvalente. Que vous planifiiez des vacances en famille, des sorties avec des amis ou des trajets professionnels, ce Renault Espace vous offre le confort que vous méritez.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de ce Renault Espace luxueux et polyvalent !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Renault',
            'modele'            => 'Twingo',
            'annee'             => '2019',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-12-28',
            'immatriculation'   => 'RN-643-RB',
            'kilometrage'       => 6500,
            'nombre_places'     => 2,
            'prix'              => 24,
            'categorie_id'      => 1,
            'adresse_id'        => 26,
            'user_id'           => 26,
            'description'       => 
            
                "Location d'une Renault Twingo - Petite, Agile et Parfaite pour la Ville!<br><br>

                Chers adeptes de la conduite agile et urbaine,<br><br>
                
                C'est avec plaisir que je vous propose de louer une voiture qui incarne la vivacité et la praticité urbaine : la Renault Twingo, modèle de 2019. Ce véhicule est conçu pour offrir une expérience de conduite agile et pratique, parfaite pour naviguer dans la ville. Avec seulement 6 500 km au compteur, cette Renault Twingo est prête à vous accompagner partout où vous le souhaitez.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Renault<br>
                Modèle : Twingo<br>
                Année : 2019<br>
                Carburant : Essence<br>
                Kilométrage : 6 500 km<br>
                Nombre de places : 2<br>
                Description :<br>
                La Renault Twingo est la compagne idéale pour les explorateurs urbains. Son design compact et pratique est associé à une conduite agile et amusante, vous permettant de vous faufiler dans la circulation urbaine avec aisance. Que vous cherchiez une place de parking, que vous vous rendiez au travail ou que vous exploriez la ville, cette Renault Twingo est votre alliée.<br><br>
                
                Tarif : 24 € par jour<br><br>
                
                Disponibilité : Cette Renault Twingo est prête à vous accompagner dans tous vos déplacements en ville dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 28 décembre 2024, garantissant votre sécurité lors de vos trajets.<br><br>
                
                Immatriculation : RN-643-RB<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Renault Twingo et profiter d'une conduite agile et pratique. Que vous vous rendiez au travail, que vous fassiez des courses ou que vous exploriez la ville, cette Renault Twingo saura rendre vos déplacements plus agréables.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Renault Twingo dans vos trajets urbains !<br><br>
                
                Cordialement",
        ]);





        // CITROEN
        Vehicule::create([
            'marque'            => 'Citroen',
            'modele'            => 'C3',
            'annee'             => '2016',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-09-16',
            'immatriculation'   => 'BG-200-AZ',
            'kilometrage'       => 53000,
            'nombre_places'     => 5,
            'prix'              => 32,
            'categorie_id'      => 1,
            'adresse_id'        => 27,
            'user_id'           => 27,
            'description'       => 
            
                "Location d'une Citroën C3 - Style, Confort et Polyvalence Réunis!<br><br>

                Chers amateurs de conduite élégante et de confort,<br><br>
                
                C'est avec enthousiasme que je vous propose de louer une voiture qui allie style, confort et polyvalence : la Citroën C3, modèle de 2016. Ce véhicule est conçu pour offrir une expérience de conduite agréable et pratique pour toutes vos aventures. Avec 53 000 km au compteur, cette Citroën C3 est prête à vous emmener où vous le souhaitez.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Citroën<br>
                Modèle : C3<br>
                Année : 2016<br>
                Carburant : Essence<br>
                Kilométrage : 53 000 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Citroën C3 allie style et confort pour une conduite polyvalente au quotidien. Son design extérieur moderne est assorti d'un intérieur bien aménagé, offrant une expérience de conduite plaisante pour vous et vos passagers. Que vous fassiez des trajets en ville, partiez en escapade ou exploriez de nouveaux endroits, cette Citroën C3 sera votre partenaire idéal.<br><br>
                
                Tarif : 32 € par jour<br><br>
                
                Disponibilité : Cette Citroën C3 est prête à vous emmener partout où vous le souhaitez dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 16 septembre 2025, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : BG-200-AZ<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Citroën C3 et découvrir une conduite stylée, confortable et polyvalente. Que vous rouliez en ville, partiez en week-end ou fassiez des trajets quotidiens, cette Citroën C3 sera votre partenaire idéal.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Citroën C3 lors de vos prochaines aventures !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Citroen',
            'modele'            => 'C4',
            'annee'             => '2020',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-10-30',
            'immatriculation'   => 'BA-074-AU',
            'kilometrage'       => 10200,
            'nombre_places'     => 5,
            'prix'              => 38,
            'categorie_id'      => 2,
            'adresse_id'        => 28,
            'user_id'           => 28,
            'description'       => 
            
                "Location d'une Citroën C4 - Élégance, Confort et Performance Réunis!<br><br>

                Chers amateurs de conduite sophistiquée et de confort,<br><br>
                
                C'est avec un grand plaisir que je vous propose de louer une voiture qui allie élégance, confort et performance : la Citroën C4, modèle de 2020. Ce véhicule est conçu pour offrir une expérience de conduite exceptionnelle, que ce soit pour vos trajets quotidiens ou vos escapades. Avec seulement 10 200 km au compteur, cette Citroën C4 est prête à vous accompagner partout où vous irez.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Citroën<br>
                Modèle : C4<br>
                Année : 2020<br>
                Carburant : Diesel<br>
                Kilométrage : 10 200 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Citroën C4 allie élégance et confort pour une conduite raffinée au quotidien. Son design extérieur moderne est complété par un intérieur spacieux et bien aménagé, offrant une expérience de conduite agréable pour vous et vos passagers. Que vous fassiez des trajets en ville ou que vous partiez en escapade le week-end, cette Citroën C4 saura vous séduire.<br><br>
                
                Tarif : 38 € par jour<br><br>
                
                Disponibilité : Cette Citroën C4 est prête à vous accompagner dans vos aventures dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 30 octobre 2024, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : BA-074-AU<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Citroën C4 et découvrir une conduite élégante, confortable et performante. Que vous vous rendiez au travail, partiez en week-end ou entrepreniez des voyages plus longs, cette Citroën C4 vous comblera.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de cette Citroën C4 lors de vos futurs déplacements !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Citroen',
            'modele'            => 'Ami',
            'annee'             => '2023',
            'energie'           => 'Electrique',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2026-02-17',
            'immatriculation'   => 'WS-455-QQ',
            'kilometrage'       => 2000,
            'nombre_places'     => 2,
            'prix'              => 25,
            'categorie_id'      => 1,
            'adresse_id'        => 29,
            'user_id'           => 29,
            'description'       => 
            
                "Location d'une Citroën Ami - La Voiture Électrique Compacte et Écologique!<br><br>

                Chers adeptes de la mobilité électrique et de l'écologie urbaine,<br><br>
                
                C'est avec un enthousiasme contagieux que je vous propose de louer une voiture qui incarne la mobilité électrique et l'écologie urbaine : la Citroën Ami, modèle de 2023. Cette voiture électrique compacte est conçue pour offrir une expérience de conduite respectueuse de l'environnement et parfaitement adaptée à la vie en ville. Avec seulement 2 000 km au compteur, cette Citroën Ami est prête à vous transporter vers un avenir plus durable.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Citroën<br>
                Modèle : Ami<br>
                Année : 2023<br>
                Carburant : Électrique<br>
                Kilométrage : 2 000 km<br>
                Nombre de places : 2<br>
                Description :<br>
                La Citroën Ami incarne l'avenir de la mobilité urbaine électrique. Son design compact et futuriste est combiné à une technologie respectueuse de l'environnement, offrant une expérience de conduite silencieuse et agréable. Que vous vous rendiez au travail, exploriez la ville ou fassiez des courses, la Citroën Ami est la solution parfaite pour des déplacements écologiques.<br><br>
                
                Tarif : 25 € par jour<br><br>
                
                Disponibilité : La Citroën Ami est prête à vous emmener dans vos trajets électriques dès maintenant.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 17 février 2026, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : WS-455-QQ<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Citroën Ami et profiter d'une conduite électrique respectueuse de l'environnement. Que vous contribuiez à la réduction de votre empreinte carbone ou que vous appréciiez simplement la simplicité d'une conduite électrique, la Citroën Ami vous attend.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de la Citroën Ami dans vos déplacements urbains écologiques !<br><br>
                
                Cordialement",
        ]);





        // MERCEDES
        Vehicule::create([
            'marque'            => 'Mercedes-Benz',
            'modele'            => 'Classe A',
            'annee'             => '2021',
            'energie'           => 'Essence',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-06-10',
            'immatriculation'   => 'FC-899-DG',
            'kilometrage'       => 21500,
            'nombre_places'     => 5,
            'prix'              => 75,
            'categorie_id'      => 2,
            'adresse_id'        => 30,
            'user_id'           => 30,
            'description'       => 
            
                "Location d'une Mercedes-Benz Classe A - Élégance, Performance et Luxe Réunis!<br><br>

                Chers passionnés d'automobiles de luxe et de conduite performante,<br><br>
                
                C'est avec un immense plaisir que je vous propose de louer une voiture qui incarne l'élégance, la performance et le luxe : la Mercedes-Benz Classe A, modèle de 2021. Cette voiture de prestige est conçue pour offrir une expérience de conduite exceptionnelle alliant sophistication et dynamisme. Avec 21 500 km au compteur, cette Mercedes-Benz Classe A est prête à vous emmener vers de nouveaux horizons.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Mercedes-Benz<br>
                Modèle : Classe A<br>
                Année : 2021<br>
                Carburant : Essence<br>
                Kilométrage : 21 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Mercedes-Benz Classe A allie élégance et performance pour une conduite d'exception. Son design extérieur raffiné est complété par un intérieur luxueux, offrant une expérience de conduite haut de gamme pour vous et vos passagers. Que vous souhaitiez faire une impression lors d'un événement spécial, parcourir des routes sinueuses ou simplement vous déplacer avec style, cette Mercedes-Benz Classe A est votre choix idéal.<br><br>
                
                Tarif : 75 € par jour<br><br>
                
                Disponibilité : La Mercedes-Benz Classe A vous attend pour des moments de conduite inoubliables.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 10 juin 2025, garantissant votre sécurité lors de vos déplacements.<br><br>
                
                Immatriculation : FC-899-DG<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Mercedes-Benz Classe A et découvrir une conduite d'élite associant luxe et performance. Que vous fassiez des trajets spéciaux, partiez en escapade ou simplement rouliez avec élégance, cette Mercedes-Benz Classe A vous comblera.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de la Mercedes-Benz Classe A lors de vos futurs voyages extraordinaires !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Mercedes-Benz',
            'modele'            => 'Eqs',
            'annee'             => '2022',
            'energie'           => 'Electrique',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2024-07-27',
            'immatriculation'   => 'ER-129-SS',
            'kilometrage'       => 3500,
            'nombre_places'     => 5,
            'prix'              => 80,
            'categorie_id'      => 7,
            'adresse_id'        => 31,
            'user_id'           => 31,
            'description'       =>
            
                "Location d'une Mercedes-Benz EQS - Électrique, Luxe et Innovation à l'Horizon!<br><br>

                Chers amateurs de véhicules électriques, d'innovation technologique et de luxe raffiné,<br><br>
                
                C'est avec un enthousiasme débordant que je vous invite à découvrir la Mercedes-Benz EQS, un bijou de l'ingénierie automobile qui allie la performance électrique, le luxe et l'innovation. La Mercedes-Benz EQS, modèle de 2022, est prête à vous transporter dans un futur électrique et luxueux. Avec seulement 3 500 km au compteur, cette Mercedes-Benz EQS est une fenêtre vers une nouvelle ère de conduite.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Mercedes-Benz<br>
                Modèle : EQS<br>
                Année : 2022<br>
                Carburant : Électrique<br>
                Kilométrage : 3 500 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Mercedes-Benz EQS incarne la convergence parfaite entre l'innovation électrique et le luxe sophistiqué. Son design avant-gardiste est associé à un intérieur somptueux, créant une expérience de conduite électrique inégalée. Que vous soyez passionné de voitures électriques ou que vous souhaitiez découvrir le futur de la mobilité, la Mercedes-Benz EQS vous offre une expérience unique.<br><br>
                
                Tarif : 80 € par jour<br><br>
                
                Disponibilité : La Mercedes-Benz EQS vous attend pour une aventure électrique extraordinaire.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 27 juillet 2024, garantissant votre sécurité et votre tranquillité d'esprit.<br><br>
                
                Immatriculation : ER-129-SS<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Mercedes-Benz EQS et découvrir les joies d'une conduite électrique luxueuse et innovante. Que vous souhaitiez réduire votre empreinte carbone ou simplement vivre une expérience de conduite exceptionnelle, la Mercedes-Benz EQS est prête à vous accueillir.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de la Mercedes-Benz EQS lors de vos futurs voyages électriques de luxe !<br><br>
                
                Cordialement",
        ]);


        Vehicule::create([
            'marque'            => 'Mercedes-Benz',
            'modele'            => 'Classe C',
            'annee'             => '2021',
            'energie'           => 'Diesel',
            'image'             => 'par_defaut.jpg',
            'date_controle'     => '2025-11-20',
            'immatriculation'   => 'SU-233-AT',
            'kilometrage'       => 14300,
            'nombre_places'     => 5,
            'prix'              => 80,
            'categorie_id'      => 2,
            'adresse_id'        => 32,
            'user_id'           => 32,
            'description'       => 
            
                "Location d'une Mercedes-Benz Classe C - Élégance, Performance et Confort Intemporels!<br><br>

                Chers adeptes de l'élégance intemporelle, de la performance raffinée et du confort luxueux,<br><br>
                
                Il me fait plaisir de vous présenter la Mercedes-Benz Classe C, modèle de 2021, une véritable icône de l'automobile qui allie élégance, performance et confort avec une précision exceptionnelle. Avec seulement 14 300 km au compteur, cette Mercedes-Benz Classe C est prête à vous emmener dans le monde du luxe et de la performance.<br><br>
                
                Caractéristiques clés :<br><br>
                
                Marque : Mercedes-Benz<br>
                Modèle : Classe C<br>
                Année : 2021<br>
                Carburant : Diesel<br>
                Kilométrage : 14 300 km<br>
                Nombre de places : 5<br>
                Description :<br>
                La Mercedes-Benz Classe C incarne une élégance intemporelle et une performance raffinée. Son design extérieur emblématique est associé à un intérieur luxueux, offrant une expérience de conduite exceptionnelle à chaque trajet. Que vous souhaitiez vous déplacer avec classe lors d'occasions spéciales, explorer de nouvelles routes ou simplement profiter d'une conduite confortable, la Mercedes-Benz Classe C vous transporte avec style.<br><br>
                
                Tarif : 80 € par jour<br><br>
                
                Disponibilité : La Mercedes-Benz Classe C est prête à vous emmener dans une aventure de conduite exceptionnelle.<br><br>
                
                Contrôle technique : Le dernier contrôle technique a été effectué le 20 novembre 2025, garantissant votre sécurité et votre tranquillité d'esprit sur la route.<br><br>
                
                Immatriculation : SU-233-AT<br><br>
                
                Je vous encourage à me contacter dès maintenant pour réserver cette Mercedes-Benz Classe C et découvrir une expérience de conduite alliant élégance, performance et confort. Que vous souhaitiez impressionner lors d'événements spéciaux ou vivre l'essence du luxe automobile, la Mercedes-Benz Classe C est à votre service.<br><br>
                
                Note : L'image utilisée dans cette annonce est une image par défaut. Des photos actuelles de la voiture seront fournies sur demande.<br><br>
                
                Je vous remercie et j'ai hâte de vous voir profiter de la Mercedes-Benz Classe C lors de vos futurs voyages empreints d'élégance et de performance !<br><br>
                
                Cordialement",
        ]);
    }
}
