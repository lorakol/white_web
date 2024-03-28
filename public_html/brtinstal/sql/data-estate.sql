
ALTER TABLE `PREFIXads` add `property_type` varchar(64) default NULL;

ALTER TABLE `PREFIXads` add `bedrooms` int(2) default NULL;

ALTER TABLE `PREFIXads` add `bathrooms` int(2) default NULL;

ALTER TABLE `PREFIXads` add `area` float default NULL;

ALTER TABLE `PREFIXads` add `year_built` int(4) default NULL;

ALTER TABLE `PREFIXads` add `estate_condition` varchar(64) default NULL;

ALTER TABLE `PREFIXads` add `amenities` text default NULL;
ALTER TABLE `PREFIXads` add `community_amenities` text default NULL;

ALTER TABLE `PREFIXads` add `type1` varchar(64) default NULL;

UPDATE `PREFIXseo_pages` set `title`='Real Estate Classified Ads', `meta_description`='Real Estate Online Classified Ads. Search for homes or advertise your property!', `meta_keywords`='realestate,classifieds,realestate listings,realestate listing,apartment classifieds,realestate classifieds,classified,house for sale,land classifieds,realestate property,property classifieds' where id=1;
UPDATE `PREFIXseo_pages` set `title`='%city %category_name Real Estate Classified Ads', meta_description='%city %category_name Real Estate Online Classified Ads. Search for homes or advertise your property!', meta_keywords='%city %category_name Real Estate Online Classified Ads. Search for homes or advertise your property!' where id=3;

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

INSERT INTO `PREFIXfieldsets` (`id`, `name`, `description`) VALUES 
(1, 'Homes', 'Homes Fieldset'),
(2, 'Land', 'Land Fieldset'),
(3, 'Office', 'Office fieldset'),
(4, 'Agents', 'Agents Fieldset');


INSERT INTO `PREFIXcategories` (`id`, `picture`, `parent_id`, `fieldset`, `order_no`, `groups`) VALUES 
(1, 'house_for_sale.png', 0, 1, 1, '0'),
(2, 'for_rent.png', 0, 1, 2, '0'),
(3, 'vacation_rentals.png', 0, 1, 3, '0'),
(4, 'office_commercial.png', 0, 3, 4, '0'),
(8, 'land.png', 0, 2, 8, '0'),
(9, 'realestate_agents.png', 0, 4, 9, '0');

INSERT INTO `PREFIXcategories_lang` (`id`, `name`, `description`, `page_title`, `meta_keywords`, `meta_description`) VALUES 
(1, 'Homes For Sale', 'Homes and condos for sale', 'Homes For Sale', 'realestate ads,online realestate,realestate showcase,realestate deals,realestate sites,property listings,realestate foreclosures,real for sale,real houses,realestate foreclosure,houses for sale by owner,house for sale by owner,home for sale by owner,sale by owner,real agents,real condos,realestate auctions,real property,real property search,realestate for sale,realestate land,realestate houses,new homes for sale', 'Real Estate Classifieds Advertising! Find and sell houses online.'),
(2, 'Homes for Rent', 'Homes and condos for rent', 'Homes for Rent', 'real estate,rent,apartment rent,rent apartments,apartments for rent,apartment for rent,rentals,realestate rent,rent house,rental apartments,rent home,rent houses,real estates,rent professionals,rural rent,rental houses,renting,rent to own,rental homes,rental,rent property,rent realty,rent land', 'Real Estate Classifieds Advertising! Find and rent houses online.'),
(3, 'Vacation Rentals', 'Search or list', 'Vacation Rentals', 'vacation rental,vacation rentals,rental homes,vacation homes,rental houses,vacation,vacations,vacation rental homes,rental house,rental,beach vacation,rentals,rental home,vacation rental properties,vacation rental property,condo rental,vacation villas,luxury vacation,rental property,rental properties,vacation home rentals,vacation houses', 'Real Estate Classifieds Advertising! Vacation Rentals and much more.'),
(4, 'Commercial', 'Office & Commercial', 'Office & Commercial', 'office space,commercial realestate,realestate,office rental,realestate agent,offices,realestate listings,office lease,business office,rent office,office spaces,office realestate,commercial realestate,industrial realestate,realestate listing,office buildings,realestate mls,realestate property,realestate leasing,office listings,building realestate,office building,office properties,office leases,office units,office warehouses', 'Real Estate Classifieds Advertising! Office & Commercial for sale or rent.'),
(8, 'Land', 'Land for sale or lease', 'Land', 'land,realestate,land for sale,realestate land,realestate agent,hunting land,realestate agents,buying land,rural land,land sale,farm land,land sales,realestate for sale,realestates,land listings,realestate property,land lots,land acreage,realestate listings,ranch land,land for sale by owner,land agents,land property,realestate houses,find land,waterfront land,find realestate,agent land', 'Real Estate Classifieds Advertising! Find and sell land online.'),
(9, 'Agents & Services', 'Realtors and services.', 'Agents & Services', 'realestate agent,realestate,realestate agents,realestate for sale,listing agent,realestate listing,realestate listings,realestate mls,agents,agent,gmac realestate,realtor agent,realestate broker,realestate agencies,realestate brokers,coldwell realestate,buying realestate,commercial realestate,realestate property,commercial agent,', 'Real Estate Classifieds Advertising! Find Agents & Services.');


INSERT INTO `PREFIXfields` (`id`, `fieldset`, `caption`, `type`, `order_no`, `is_numeric`, `validation_type`, `size`, `min`, `max`, `required`, `editable`, `advanced_search`, `quick_search`, `search_type`, `max_uploaded_size`, `extensions`, `image_resize`, `dep_id`, `other_val`, `read_only`, `active`) VALUES 
(5, '1', 'property_type', 'menu', 5, 0, '', '', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 0, 1, 0, 1),
(6, '1', 'bedrooms', 'textbox', 6, 0, '/^[0-9]+$/', '7', 0, 0, 0, 1, 1, 0, 2, 0, '', '', 0, 0, 0, 1),
(7, '1', 'bathrooms', 'textbox', 7, 0, '/^[0-9]+$/', '7', 0, 0, 0, 1, 1, 0, 2, 0, '', '', 0, 0, 0, 1),
(8, '1,2,3', 'area', 'textbox', 8, 1, '', '7', 0, 0, 0, 1, 1, 0, 2, 0, '', '', 0, 0, 0, 1),
(9, '1,3', 'year_built', 'textbox', 9, 0, '/^[0-9]+$/', '7', 0, 0, 0, 1, 1, 0, 2, 0, '', '', 0, 0, 0, 1),
(10, '1,3', 'estate_condition', 'menu', 12, 0, '', '', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 0, 1, 0, 1),
(11, '2,3', 'type1', 'menu', 13, 0, '', '', 0, 0, 0, 1, 1, 0, 1, 0, '', '', 0, 0, 0, 1),
(12, '1', 'amenities', 'checkbox_group', 10, 0, '', '', 0, 0, 0, 1, 0, 0, 0, 0, '', '', 0, 0, 0, 1),
(13, '1', 'community_amenities', 'checkbox_group', 11, 0, '', '', 0, 0, 0, 1, 0, 0, 0, 0, '', '', 0, 0, 0, 1);

INSERT INTO `PREFIXfields_lang` (`id`, `name`, `top_str`, `error_message`, `info_message`, `default_val`, `prefix`, `postfix`, `elements`, `search_elements`, `date_format`) VALUES 
(5, 'Property Type', 'Select Property Type', '', '', '', '', '', 'Apartment|Building|Bungalow|Business|Commercial|Cottage|Double Storey|General	Godown|Maisonette|Office|Redevelopment|Residential|Town-House', '', ''),
(6, 'Bedrooms', '', 'Please enter a numeric value for bedrooms!', '', '', '', '', '', '', ''),
(7, 'Bathrooms', '', 'Please enter a numeric value for bathrooms!', '', '', '', '', '', '', ''),
(8, 'Area', '', '', '', '', '', 'm<sup>2</sup>', '', '', ''),
(9, 'Year Built', '', 'Please enter a numeric value for year!', '', '', '', '', '', '', ''),
(10, 'Condition', 'Select Condition', '', '', '', '', '', 'Resale|New|Pre-Construction', '', ''),
(11, 'Ad Type', 'Select Ad Type', '', '', '', '', '', 'Offering|Wanted', '', ''),
(12, 'Amenities', '', '', '', '', '', '', 'Air Conditioned|Basement|Dining Room|Elevator|Fireplace|Furnished|Garage|Garden|Loft|New Construction|Parking|Playground|Pool|Security Features', '', ''),
(13, 'Community Amenities', '', '', '', '', '', '', 'Near School|Near Kindergarten|Near Shop|Near Transit|Mountain View|City View|Ocean View|Water View', '', '');

INSERT INTO `PREFIXpriorities` (`id`, `price`, `order_no`) VALUES (1, 2, 2),(2, 1, 1);

INSERT INTO `PREFIXpriorities_lang` (`id`, `name`) VALUES (1, 'Gold'),(2, 'Silver');

INSERT INTO `PREFIXslugs` (`object_id`, `type`, `slug`) VALUES
(1, 'category', 'homes-for-sale'),
(2, 'category', 'homes-for-rent'),
(3, 'category', 'vacantion-rentals'),
(4, 'category', 'office-commercial'),
(8, 'category', 'land'),
(9, 'category', 'agents-services');
