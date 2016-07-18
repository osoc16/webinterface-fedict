var ldf = require('ldf-client');
var fragmentsClient = new ldf.FragmentsClient('http://fragments.dbpedia.org/2014/en');

var query = 'SELECT * { ?s ?p <http://dbpedia.org/resource/Belgium>. ?s ?p ?o } LIMIT 100',
    results = new ldf.SparqlIterator(query, { fragmentsClient: fragmentsClient });
results.on('data', console.log);