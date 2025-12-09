INSERT INTO moduli (nome, numero_ore, unita_formativa_id) VALUES
('Sicurezza Informatica', 25, 1),
('Analisi dei Dati', 30, 2),
('Cloud Computing', 20, 3);

SELECT * FROM moduli;
SELECT nome, numero_ore FROM moduli;

SELECT moduli.nome, unita_formative.nome FROM moduli 
JOIN unita_formative ON moduli.unita_formativa_id = unita_formative.id;

--estrarre tutti i corsisti (nome, cognome, data_di_nascita) 
--e il (nome) del modulo a cui sono iscritti

SELECT corsisti.nome, corsisti.cognome, corsisti.data_di_nascita, moduli.nome
FROM corsisti JOIN iscrizioni ON corsisti.id = iscrizioni.corsista_id
JOIN moduli ON iscrizioni.modulo_id = moduli.id;

SELECT * FROM corsisti WHERE data_di_nascita < '1990-01-01';