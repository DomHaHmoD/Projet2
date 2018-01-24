
/*afficher la liste des selections suivantes*/ 
SELECT  personnes.prenom      AS 'PRENOM' ,
		personnes.nom      AS 'NOM' ,
		date_format(personnes.naissance ,'%d/%m/%Y') AS 'DATE DE NAISSANCE'   
		/* fonction 'date_format()' utilisée pour changer la forme de la date en jj/mm/aaa */ ,
		        
		/* fonction 'concat()' utilisée pour rassembler differentes données dans une seule colonne */   
		concat( adresse.num_rue    ,' ', adresse.rue     ,'   ',    
			         
		/* fonction 'ifnull()' utilisée pour remplacer les valeurs 'null' par la valeur souhaitée */
		ifnull(adresse.residence, ''),    ifnull(adresse.batiment,  '')     )        AS 'ADRESSE' ,
		ville_cp.nom_commune    AS 'VILLE' ,
		ville_cp.code_post     AS 'CODE POSTAL' ,
		telephone.num_telephone    AS 'NUMERO DE TELEPHONE' ,
		type_telephone.denom_typ_tel   AS 'TYPE DE TELEPHONE', 

		/* DHI : ADD fin abonnement et type d'abonnement */ 
		carte_abonnement.date_fin_validite AS 'FIN ABONNEMENT',
		type_abonnement.denom_ab AS 'ABONNEMENT',

		/* DHI : Si l'on veut l'etablissement */
		list_etablissement.denomination_etablissement AS 'ETABLISSEMENT'

 
		/*venant de la table personnes: */
		FROM  personnes      
		/*jointe avec les tables suivantes*/  
		INNER JOIN joindre ON personnes.id_personne = joindre.id_personne  
		INNER JOIN telephone ON joindre.id_tel = telephone.id_tel  
		INNER JOIN type_telephone ON telephone.id_type_tel = type_telephone.id_type_tel  
		INNER JOIN habite ON personnes.id_personne = habite.id_personne  
		INNER JOIN adresse ON habite.id_adresse = adresse.id_adresse  
		INNER JOIN ville_cp ON adresse.id_ville = ville_cp.id_ville
		INNER JOIN carte_abonnement ON personnes.id_personne = carte_abonnement.id_personne 
		INNER JOIN type_abonnement ON carte_abonnement.id_type_ab = type_abonnement.id_type_ab 
		INNER JOIN list_etablissement ON carte_abonnement.id_personne = carte_abonnement.id_etablissement
		INNER JOIN list_etablissement ON list_etablissement.id_etablissement = list_etablissement.denomination_etablissement

		WHERE nom =  'Rousset'