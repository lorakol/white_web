ALTER TABLE `PREFIXads` add `make` varchar(64) default NULL;

ALTER TABLE `PREFIXads` add `model` varchar(64) default NULL;

ALTER TABLE `PREFIXads` add `year` int(4) default NULL;

ALTER TABLE `PREFIXads` add `length` float default NULL;

ALTER TABLE `PREFIXads` add `hull_material` varchar(64) default NULL;

ALTER TABLE `PREFIXads` add `horsepower` int(5) default NULL;

ALTER TABLE `PREFIXads` add `enginemodel` varchar(64) default NULL;

ALTER TABLE `PREFIXads` add `engine_type` varchar(64) default NULL;

ALTER TABLE `PREFIXads` add `fuel` varchar(128) default NULL;

ALTER TABLE `PREFIXads` add `condition` varchar(64) default NULL;


UPDATE `PREFIXseo_pages` set `title`='Boats For Sale Classifieds', `meta_description`='New Boats and Used Boats For Sale By Owner and from Dealers.', `meta_keywords`='boats,boat,boats classifieds,used boats,fishing boats,boat sales,new boats,used boats for sale,used boat classifieds,sailboats,powerboats' where id=1;
UPDATE `PREFIXseo_pages` set `title`='%city %category_name  Online Boats For Sale', meta_description='%city %category_name New Boats and Used Boats For Sale By Owner and from Dealers.', meta_keywords='%city, %category_name, boats,boat,boats classifieds,used boats,fishing boats,boat sales,new boats,used boats for sale,used boat classifieds,sailboats,powerboats' where id=3;

INSERT INTO `PREFIXcountries` (`id`, `name`) VALUES 
(1, 'USA'),(2, 'Canada'),(3, 'UK'),(4, 'Spain'),(5, 'France'),(6, 'Germany'),(7, 'Austria');

INSERT INTO `PREFIXregions` (`name`, `dep`) VALUES 
('AL', 1), ('AK', 1), ('AZ', 1), ('AR', 1), ('CA', 1), ('CO', 1), ('CT', 1), ('DE', 1), ('FL', 1), ('GA', 1),
('HI', 1), ('ID', 1), ('IL', 1), ('IN', 1), ('IA', 1), ('KS', 1), ('KY', 1), ('LA', 1), ('ME', 1), ('MD', 1),
('MA', 1), ('MI', 1), ('MN', 1), ('MS', 1), ('MO', 1), ('MT', 1), ('NE', 1), ('NV', 1), ('NH', 1), ('NJ', 1),
('NM', 1), ('NY', 1), ('NC', 1), ('ND', 1), ('OH', 1), ('OK', 1), ('OR', 1), ('PA', 1), ('RI', 1), ('SC', 1),
('SD', 1), ('TN', 1), ('TX', 1), ('UT', 1), ('VA', 1), ('VT', 1), ('WA', 1), ('WV', 1), ('WI', 1), ('WY', 1),
('Alberta', 2),('British Columbia', 2),('Manitoba', 2),('New Brunswick', 2),('Newfoundland and Labrador', 2),('Northwest Territories', 2),('Nova Scotia', 2),('Nunavut', 2),('Ontario', 2),('Prince Edward Island', 2),('Quebec', 2),('Saskatchewan', 2),('Yukon', 2),
('East England', 3),('East Midlands', 3),('London', 3),('North East', 3),('North West', 3),('Ireland', 3),('Scotland', 3),('South East', 3),('South West', 3),('Wales', 3),('West Midlands', 3),('Yorks and Humber', 3),
('Álava', 4),('Albacete', 4),('Alicante', 4),('Almería', 4),('Asturias', 4),('Ávila', 4),('Badajoz', 4),('Balears (Illas)', 4),('Barcelona', 4),('Burgos', 4),('Cáceres', 4),('Cádiz', 4),('Cantabria', 4),('Castellón', 4), ('Ceuta', 4),('Ciudad Real', 4),('Córdoba', 4),('Coruña (La)', 4),('Cuenca', 4),('Gerona', 4),('Granada', 4),('Guadalajara', 4),('Guipúzcua', 4),('Huelva', 4),('Huesca', 4),('Jaén', 4),('León', 4),('Lérida', 4),('Lugo', 4),('Madrid', 4),('Málaga', 4),('Melilla', 4),('Murcia', 4),('Navarra', 4),('Orense', 4),('Palencia', 4),('Palmas (Las)', 4),('Pontevedra', 4),('Rioja (La)', 4),('Salamanca', 4),('Segovia', 4),('Sevilla', 4),('Soria', 4),('Tarragona', 4),('Tenerife (Sta Cruz)', 4),('Teruel', 4),('Toledo', 4),('Valencia', 4),('Valladolid', 4),('Vizcaya', 4),('Zamora', 4),('Zaragoza', 4),
('Alsace', 5),('Aquitaine', 5),('Auvergne', 5),('Burgundy', 5),('Brittany', 5),('Centre', 5),('Champagne-Ardenne', 5),('Corsica', 5),('Franche-Comté', 5),('French Riviera', 5),('Île-de-France', 5),('Languedoc-Roussillon', 5),('Limousin', 5),('Lorraine', 5),('Lower Normandy', 5),('Midi-Pyrénées', 5),('Nord-Pas-de-Calais', 5),('Upper Normandy', 5),('Poitou-Charentes', 5),('Pays de la Loire', 5),('Picardy', 5),('Poitou-Charentes', 5),('Provence-Alpes-Côte d\'Azur', 5),('Rhône-Alpes', 5),
('Baden-Wurttemberg', 6),('Bavaria', 6),('Berlin', 6),('Brandenburg', 6),('Bremen', 6),('Hamburg', 6),('Hesse', 6),('Lower Saxony', 6),('Mecklenburg-Vorpommerr', 6),('North Rhine-Westphalia', 6),('Rhineland-Palatinate', 6),('Saarland', 6),('Saxony', 6),('Saxony-Anhalt', 6),('Schleswig-Holstein', 6),
('Burgenland', 7),('Carinthia', 7),('Lower Austria', 7),('Salzburg', 7),('Styria', 7),('Tyrol', 7),('Upper Austria', 7),('Vienna', 7),('Vorarlberg', 7);

INSERT INTO `PREFIXcategories` (`id`, `picture`, `parent_id`, `fieldset`, `order_no`, `groups`, `level`) VALUES 
(1, 'powerboats.png', 0, 1, 1, '0', 1),
(2, 'sailboats.png', 0, 1, 2, '0', 1),
(3, 'fishingboats.png', 0, 1, 3, '0', 1),
(4, 'cruiseship.png', 0, 1, 4, '0', 1),
(5, 'pwc.png', 0, 1, 5, '0', 1),
(6, 'deckboat.png', 0, 1, 6, '0', 1),
(7, 'commercial_ship.png', 0, 1, 7, '0', 1),
(8, 'smallboat.png', 0, 1, 8, '0', 1),
(9, 'boatparts.png', 0, 2, 9, '0',1);


INSERT INTO `PREFIXcategories_lang` (`id`, `name`, `description`, `page_title`, `meta_keywords`, `meta_description`) VALUES 
(1, 'Power Boats', '', 'Power Boats for Sale', 'power boats,powerboats,performance powerboats,stingray powerboats,kenyon powerboats,vector powerboats,awesome powerboats,yamaha powerboats,stv powerboats,pure performance powerboats', 'Buy and sell new and used power boats.'),
(2, 'Sail Boats', '', 'Sail Boats for Sale', 'boats,boating,sailing boats,sail boats,sailing boat,sails boats,sailing boats for sale,sailboat boats,sails boat,sailing boat for sale,used boat sails,day sailing boats', 'Buy and sell new and used sail boats.'),
(3, 'Fishing Boats', '', 'Fishing Boats for Sale', 'fishing boat,saltwater fishing boats,fishing boats,used fishing boats,aluminum fishing boats,bass fishing boats,offshore fishing boats,fishing boats for sale,small fishing boats,flats fishing boats', 'Buy and sell new and used fishing boats.'),
(4, 'Cruise Ships', '', 'Cruise Ships for Sale', 'cruise ships,norwegian cruise ship,princess cruise ship,caribbean cruise ship,celebrity cruise ship,luxury cruise ship,cruise ship model', 'Cruise ships and passenger ships announcements.'),
(5, 'PWC', '', 'PWC and Jet Ski for Sale', 'watercraft,personal watercraft,pwc,used watercraft,yamaha watercraft,jet ski, buy jet ski, pwc for sale,pwc sales', 'Personal watercrafts and jet ski classifieds.'),
(6, 'Pontoon / Deck', '', 'Pontoon / Deck for Sale', 'pontoon boats,pontoons,pontoon boat,pontoon,pontoon deck,mini pontoon,bentley pontoon,deck boats,pontoon boat deck,pontoon boats for sale,pontoon deck boats,pontoon sun deck', 'Buy and sell new and used pontoon or deck boat.'),
(7, 'Commercial', '', 'Commercial Vessels for Sale', 'commercial boat,commercial vessels,commercial vessel for sale,commercial vessels for sale,commercial fishing vessel,commercial passenger vessel,commercial vessel,small commercial vessel', 'Buy and sell new and used commercial vessels.'),
(8, 'Small Boats', '', 'Small Boats for Sale', 'small boats,small used boats,small boat,new small boats,aluminum small boats,sailing small boats,building small boats,used small boats,wooden small boats,inflatable small boats', 'Buy and sell new and used small boats.'),
(9, 'Boat Parts', '', 'Boat Parts for Sale', 'boat trailer parts,boats parts,boat parts,boat trailers parts,pontoon boat parts,marine boat parts,jon boat parts,boat motor parts,boat engine parts,used boat parts,boat parts supplies,boating parts', 'New boat parts, used boat parts, aftermarket boat parts.');


INSERT INTO `PREFIXfieldsets` (`id`, `name`, `description`) VALUES
(1, 'Boats', 'Boats Fieldsets'),
(2, 'Boat Parts', 'Boat Parts Fieldset');

INSERT INTO `PREFIXfields` (`id`, `fieldset`, `caption`, `type`, `order_no`, `is_numeric`, `validation_type`, `size`, `min`, `max`, `required`, `editable`, `advanced_search`, `quick_search`, `search_type`, `max_uploaded_size`, `extensions`, `image_resize`, `dep_id`, `other_val`, `read_only`, `active`) VALUES 
(5, '0', 'make', 'menu', 5, 0, '', '', 0, 0, 0, 1, 0, 1, 1, 0, '', '', 0, 1, 0, 1),
(6, '0', 'model', 'textbox', 6, 0, '', '30', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 0, 0, 0, 1),
(7, '1', 'year', 'textbox', 7, 0, '/^[0-9]+$/', '7', 0, 0, 0, 1, 1, 0, 2, 0, '', '', 0, 0, 0, 1),
(8, '1', 'length', 'textbox', 8, 1, '', '7', 0, 0, 0, 1, 1, 0, 2, 0, '', '', 0, 0, 0, 1),
(9, '1', 'hull_material', 'menu', 9, 0, '', '', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 0, 1, 0, 1),
(10, '1', 'enginemodel', 'textbox', 10, 0, '', '', 0, 0, 0, 1, 1, 0, 3, 0, '', '', 0, 0, 0, 1),
(11, '1', 'engine_type', 'menu', 11, 0, '', '', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 0, 1, 0, 1),
(12, '1', 'horsepower', 'textbox', 12, 0, '/^[0-9]+$/', '7', 0, 0, 0, 1, 1, 0, 2, 0, '', '', 0, 0, 0, 1),
(13, '1', 'fuel', 'menu', 13, 0, '', '', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 0, 1, 0, 1),
(14, '0', 'condition', 'menu', 14, 0, '', '', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 0, 0, 0, 1);

INSERT INTO `PREFIXfields_lang` (`id`, `name`, `top_str`, `error_message`, `info_message`, `default_val`, `prefix`, `postfix`, `elements`, `search_elements`, `date_format`) VALUES 
(5, 'Make', 'Select Make', '', '', '', '', '', 'Albermarle|Albin|Alumacraft|Aquasport|Azimut|Baja|Bavaria|Bayliner|Bayliner Trophy|Beneteau|Bertram|Boston Whaler|Carver|Cape Horn|Catalina|Centurion|Century|Chaparral|Checkmate|Chris Craft|Cigarette|Cobalt|Cobia|Contender|Cranchi|Crestliner|Crownline|Cruisers|Donzi|Doral|Duck Boats|Dufour|Egg Harbor|Elan|Fairline|Ferretti|Fiesta|Fisher|Formula|Fountain|Fountaine Pajot|Four Winns|Glastron|Grady White|Grand Banks|Grand Soleil|Hatteras|Honda|Hunter|Hurricane|Hydra Sports|Hydroplane|Island Packet|Jon Boats|Jet Boats|Jeanneau|Kawasaki|Key West|Larson|Lowe|Luhrs|Lund|Mainship|Mako|Malibu|Mariah Boats|Mastercraft|Maxum|Meridian|Monterey|Moomba|Moody|Morgan|Nitro|Pearson|Pershing|Pontoon Boat|Polaris|Princess|Proline|Pursuit|Ranger|Regal|Renken|Repo Boats|Rinker|Riva|Riviera|Robalo|Scout|Sea Doo|Sea Pro|Sea Ray|Sealine|Seaswirl|Shamrock|Shrimp Boats|Silverton|Skeeter|Stamas|Starcraft|Stingray|Stratos|Sun Tracker|Sunseeker|Supra|Tahoe|Tiara|Tigershark|Tollycraft|Tracker|Triton|Trojan|Trophy|Viking|Wellcraft|Westerly|Yamaha', '', ''),
(6, 'Model', '', '', '', '', '', '', '', '', ''),
(7, 'Year', '', 'Please enter a numeric value for year!', '', '', '', '', '', '', ''),
(8, 'Length', '', '', '', '', '', 'ft', '', '', ''),
(9, 'Hull Material', 'Select Hull Material', '', '', '', '', '', 'Aluminum Composite|Ferro-Cement|Fiberglass|Reinforced|Fiberglass/Composite|Hypalon|Inflatable|Plastic|PVC|Rigid Inflatable|Steel|Wood', '', ''),
(10, 'Enginemodel', '', '', '', '', '', '', '', '', ''),
(11, 'Engine Type', 'Select Engine Type', '', '', '', '', '', 'Direct Drive|Jet Drive|Gas|Single|Single I/O|Single Outboard|Triple Outboard|Twin|Twin I/O|Twin Outboard|Triple I/O|V-Drive', '', ''),
(12, 'Horsepower', '', 'Please enter a numeric value for horsepower!', '', '', '', '', '', '', ''),
(13, 'Fuel', 'Select Fuel Type', '', '', '', '', '', 'Diesel|Electric|Gas', '', ''),
(14, 'Condition', 'Select Condition', '', '', '', '', '', 'New|Excellent|Very Good|Good|Fair|Poor', '', '');

INSERT INTO `PREFIXpriorities` (`id`, `price`, `order_no`) VALUES (1, 2, 2),(2, 1, 1);

INSERT INTO `PREFIXpriorities_lang` (`id`, `name`) VALUES (1, 'Gold'),(2, 'Silver');

INSERT INTO `PREFIXslugs` (`object_id`, `type`, `slug`) VALUES
(1, 'category', 'powerboats'),
(2, 'category', 'sail-boats'),
(3, 'category', 'fishing-boats'),
(4, 'category', 'cruise-ships'),
(5, 'category', 'pwc-jet-ski'),
(6, 'category', 'pontoon-deck'),
(7, 'category', 'commercial-vessels'),
(8, 'category', 'small-boats'),
(9, 'category', 'boat-parts');
