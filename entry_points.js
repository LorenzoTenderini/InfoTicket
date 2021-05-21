const path = require('path');
const fs = require('fs');

// check if file exists: fs.existsSync('/path/to/file')
/*
	Aggiungi un oggetto alla variabile "obj" qui sotto per aggiungere un entry point
	- chiave -> il nome del bundle che vogliamo ottenere
	(e che avrà la forma nomeBundle.bundle.js)
	- valore -> il percorso del file javascript sorgente
*/

const obj = {
	index: path.join(path.resolve(__dirname, 'src/js'), 'index.js'),
	indexAMM: path.join(path.resolve(__dirname, 'src/js'), 'indexAMM.js'),
	indexDIR: path.join(path.resolve(__dirname, 'src/js'), 'indexDIR.js'),
	indexIMP: path.join(path.resolve(__dirname, 'src/js'), 'indexIMP.js'),
	addAMM: path.join(path.resolve(__dirname, 'src/js'), 'addAMM.js'),
	addDIR: path.join(path.resolve(__dirname, 'src/js'), 'addDIR.js'),
	addIMP: path.join(path.resolve(__dirname, 'src/js'), 'addIMP.js'),
}

module.exports = obj
