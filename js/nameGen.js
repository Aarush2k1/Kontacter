const firstNames = ["Hope", "Launa", "Katherine", "Walker", "Moses", "Tayna", "Rosia", "Yahaira", "Tommy", "Elwanda", "Clorinda", "Sheron", "Kayla", "Clementina", "Rene", "Rex", "Kathy", "Latoya", "Shirleen", "Shoshana", "Excited", "Anxious", "Overweight", "Demonic", "Jumpy", "Misunderstood", "Squashed", "Gargantuan", "Broad", "Crooked", "Curved", "Deep", "Even", "Excited", "Anxious", "Overweight", "Demonic", "Jumpy", "Misunderstood", "Squashed", "Gargantuan", "Broad", "Crooked", "Curved", "Deep", "Even", "Flat", "Hilly", "Jagged", "Round", "Shallow", "Square", "Steep", "Straight", "Thick", "Thin", "Cooing", "Deafening", "Faint", "Harsh", "High-pitched", "Hissing", "Hushed", "Husky", "Loud", "Melodic", "Moaning", "Mute", "Noisy", "Purring", "Quiet", "Raspy", "Screeching", "Shrill", "Silent", "Soft", "Squeaky", "Squealing", "Thundering", "Voiceless", "Whispering", "adamant", "adroit", "amatory", "animistic", "antic", "arcadian", "baleful", "bellicose", "bilious", "boorish", "calamitous", "caustic", "cerulean", "comely", "concomitant", "contumacious", "corpulent", "crapulous", "defamatory", "didactic", "dilatory", "dowdy", "efficacious", "effulgent", "egregious", "endemic", "equanimous", "execrable", "fastidious", "feckless", "fecund", "friable", "fulsome", "garrulous", "guileless", "gustatory", "heuristic", "histrionic", "hubristic", "incendiary", "insidious", "insolent", "intransigent", "inveterate", "invidious", "irksome", "jejune", "jocular", "judicious", "lachrymose", "limpid", "loquacious", "luminous", "mannered", "mendacious", "meretricious", "minatory", "mordant", "munificent", "nefarious", "noxious", "obtuse", "parsimonious", "pendulous", "pernicious", "pervasive", "petulant", "platitudinous", "precipitate", "propitious", "puckish", "querulous", "quiescent", "rebarbative", "recalcitant", "redolent", "rhadamanthine", "risible", "ruminative", "sagacious", "salubrious", "sartorial", "sclerotic", "serpentine", "spasmodic", "strident", "taciturn", "tenacious", "tremulous", "trenchant", "turbulent", "turgid", "ubiquitous", "uxorious", "verdant", "voluble", "voracious", "wheedling", "withering", "zealous"];

const secondNames = ["Chauncey", "Houchins", "Lama", "Frasca", "Houston", "Ake", "Shankles", "Cantor", "Mizell", "Cleland", "Maltby", "Tirrell", "Cary", "Mace", "Horta", "Carlile", "Deegan", "Torrez", "Humfeld", "Helgeson", "Taco", "Operating System", "Sphere", "Watermelon", "Cheeseburger", "Apple Pie", "Spider", "Dragon", "Remote Control", "Soda", "ninja", "chair", "pancake", "statue", "unicorn", "rainbows", "laser", "senor", "bunny", "captain", "nibblets", "cupcake", "carrot", "gnomes", "glitter", "potato", "salad", "toejam", "curtains", "beets", "toilet", "exorcism", "stick figures", "mermaid eggs", "sea barnacles", "dragons", "jellybeans", "snakes", "dolls", "bushes", "cookies", "apples", "ice cream", "ukulele", "kazoo", "banjo", "opera singer", "circus", "trampoline", "carousel", "carnival", "locomotive", "hot air balloon", "praying mantis", "animator", "artisan", "artist", "colorist", "inker", "coppersmith", "director", "designer", "flatter", "stylist", "leadman", "limner", "make-up artist", "model", "musician", "penciller", "producer", "scenographer", "set decorator", "silversmith", "teacher", "auto mechanic", "beader", "bobbin boy", "clerk of the chapel", "filling station attendant", "foreman", "maintenance engineering", "mechanic", "miller", "moldmaker", "panel beater", "patternmaker", "plant operator", "plumber", "sawfiler", "shop foreman", "soaper", "stationary engineer", "wheelwright", "woodworkers"];

const getRandomNumber = (max) => Math.floor(Math.random() * max);
//const maybePluralize = (count, noun, suffix = 's') =>
// `${count} ${noun}${count !== 1 ? suffix : ''}`;
const getRandomName = () => `${pluralize(firstNames[getRandomNumber(firstNames.length)].substring(0,6)+secondNames[getRandomNumber(secondNames.length)].substring(0,6))} , ${firstNames[getRandomNumber(firstNames.length)].substring(0,5)+secondNames[getRandomNumber(secondNames.length)].substring(0,5)+Math.floor(Math.random() * firstNames.length)}`;

//maybePluralize(0, 'turtle') + maybePluralize(3, 'fox', 'es');
const setRandomName = () => {
    document.getElementById('suggestUid').innerText = getRandomName();
}

document.getElementById('generate')
    .addEventListener('click', setRandomName);
setRandomName();

/*$('generate').click(function () {
    $('suggestUid').text(randomEl(adjectives) + ' ' + randomEl(nouns));
    //selectElementContents($('suggestUid')[0]);
});

function randomEl(list) {
    var i = Math.floor(Math.random() * list.length);
    return list[i];
}
function selectElementContents(el) {
    var range = document.createRange();
    range.selectNodeContents(el);
    var sel = window.getSelection();
    sel.removeAllRanges();
    sel.addRange(range);
}

var adjectives = [];
var nouns = [];

$('generate').click();
*/
