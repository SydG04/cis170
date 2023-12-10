const quotesArray = [
  '“It was a wonderful night, such a night as is only possible when we are young, dear reader.” — Fyodor Dostoyevsky',
  '“Reading is essential for those who seek to rise above the ordinary.” — Jim Rohn',
  '“Think before you speak. Read before you think.” — Fran Lebowitz',
  '“In the case of good books, the point is not to see how many of them you can get through, but rather how many can get through to you.” — Mortimer J. Adler',
  '“The more that you read, the more things you will know. The more that you learn, the more places you’ll go.” — Dr. Seuss',
  '“Reading one book is like eating one potato chip.” — Diane Duane',
  '“Reading is an exercise in empathy; an exercise in walking in someone else’s shoes for a while.” — Malorie Blackman',
  '“Books are a uniquely portable magic.” — Stephen King',
  '“Reading brings us unknown friends.” — Honoré de Balzac',
  '“Once you have read a book you care about, some part of it is always with you.” — Louis L’Amour',
  '“There is more treasure in books than in all the pirate’s loot on Treasure Island.” — Walt Disney',
  '“Read the best books first, or you may not have a chance to read them at all.” — Henry David Thoreau',
  '“Books serve to show a man that those original thoughts of his aren’t very new after all.” — Abraham Lincoln',
  '“Once you learn to read, you will be forever free.” — Frederick Douglass',
  '“A book is a gift you can open again and again.” — Garrison Keillor',
  '“To learn to read is to light a fire; every syllable that is spelled out is a spark.” — Victor Hugo',
  '“I think books are like people, in the sense that they’ll turn up in your life when you most need them.” — Emma Thompson',
  '“Rainy days should be spent at home with a cup of tea and a good book.” — Bill Watterson',
  '“If you don’t like to read, you haven’t found the right book.” — J.K. Rowling',
  '“Books are not made for furniture, but there is nothing else that so beautifully furnishes a house.” — Horace Mann',
  '“Books break the shackles of time, proof that humans can work magic.” — Carl Sagan',
  '“Reading for me is spending time with a friend.” — Gary Paulsen',
  '“We read to know we’re not alone.” — William Nicholson',
  '“Keep reading. It’s one of the most marvelous adventures that anyone can have.” — Lloyd Alexander',
  '“Books are the mirrors of the soul.” — Virginia Woolf',
  '“Books and doors are the same thing. You open them, and you go through into another world.” — Jeanette Winterson',
  '“What I love most about reading: It gives you the ability to reach higher ground. And keep climbing.” — Oprah Winfrey',
  '“Reading is to the mind what exercise is to the body.” — Richard Steele',
  '“Read a thousand books, and your words will flow like a river.” — Lisa See',
  '“The reading of all good books is like a conversation with the finest minds of past centuries.” — Rene Descartes',
  '“I have always imagined that paradise will be a kind of library.” — Jorge Luis Borges',
  '“And so he was reading the story as if it were a spell and the words of it, spoken aloud, could make magic happen.” — Kate DiCamillo',
  '“The world is shaped by two things—stories told and the memories they leave behind.” — Vera Nazarian',
  '“Even in writing an annual report, the unconscious plays a role.” — Mason Cooley',
  '“Books should go where they will be most appreciated, and not sit unread, gathering dust on a forgotten shelf, don’t you agree?” — Christopher Paolini',
  '“Putting down a good book can almost be an impossible act to do.” — Unknown',
  '“A mind needs books as a sword needs a whetstone, if it is to keep its edge.” — George R.R. Martin',
  '“Immersing oneself in the problems of a book is a good way to keep from thinking of love.” — Orhan Pamuk',
  '“Stories can conquer fear, you know. They can make the heart bigger.” — Ben Okri',
  '“Reading—the best state yet to keep absolute loneliness at bay.” — William Styron',
  '“A capacity, and taste, for reading, gives access to whatever has already been discovered by others. It is the key, or one of the keys, to the already solved problems.” — Abraham Lincoln',
  '“Reading is like breathing in, writing is like breathing out.” — Pam Allyn',
  '“Today a reader, tomorrow a leader.” — W. Fusselman',
  '“I am a part of everything that I have read.” — Unknown',
  '“A parent or a teacher has only his lifetime; a good book can teach forever.” — Louis L’Amour',
  '“I can’t write without a reader. It’s precisely like a kiss—you can’t do it alone.” — John Cheever',
  '“I divide all readers into two classes: those who read to remember and those who read to forget.” — William Lyon Phelps',
  '“Books themselves need no defense. Their spokesmen come and go, their readers live and die, they remain constant.” — Lawrence Clark Powell',
  '“The profession of the writer has its thorns about which the reader does not dream.” — Henryk Sienkiewicz',
  '“Perhaps there are none more lazy, or more truly ignorant, than your everlasting readers.” — William Cobbett',
  '“The unread story is not a story; it is little black marks on wood pulp. The reader, reading it, makes it live: a live thing, a story.” — Ursula K. Le Guin',
  '“As writers and readers, as sinners and citizens, our realism and our aesthetic sense make us wary of crediting the positive note.” — Seamus Heaney',
  '“While the spoken word can travel faster, you can’t take it home in your hand. Only the written word can be absorbed wholly at the convenience of the reader.” — Kingman Brewster Jr.',
  '“One must be a wise reader to quote wisely and well.” — Amos Bronson Alcott',
  '“There isn’t any distinction between a reader and a writer—reading is so much a part of it.” — Dermot Healy',
  '“A reader lives a thousand lives before he dies, said Jojen. The man who never reads lives only one.” — George R.R. Martin',
  '“The newspaper fits the reader’s program while the listener must fit the broadcaster’s program.” — Kingman Brewster Jr.',
  '“A memorandum is written not to inform the reader but to protect the writer.” — Dean Acheson',
  '“If modesty and candor are necessary to an author in his judgment of his own works, no less are they in his reader.” — Sarah Fielding',
  '“A novel is like a bow, and the violin that produces the sound is the reader’s soul.” — Stendhal',
  '“Each reader discovers for himself that, with respect to the simpler features of nature, succeeding poets have done little else than copy his similes.” — Henry David Thoreau',
  '“Readers have a loyalty that cannot be matched anywhere else in the creative arts, which explains why so many writers who have run out of gas can keep coasting anyway, propelled on to the bestseller lists …” — Stephen King',
  '“Authors frequently say things they are unaware of; only after they have gotten the reactions of their readers do they discover what they have said.” — Umberto Eco',
  '“Good writers have two things in common: They prefer to be understood rather than admired; and they do not write for knowing and over-acute readers.” — Friedrich Nietzsche',
  '“The profit of books is according to the sensibility of the reader. The profoundest thought or passion sleeps as in a mine until an equal mind and heart finds and publishes it.” — Ralph Waldo Emerson',
  '“Homeliness is almost as great a merit in a book as in a house, if the reader would abide there. It is next to beauty, and a very high art.” — Henry David Thoreau',
  '“The true reader reads every work seriously in the sense that he reads it wholeheartedly, makes himself as receptive as he can. But for that very reason he cannot possibly read every work solemnly or gravely. … He will never commit the error of trying to munch whipped cream as if it were venison.” — C.S. Lewis',
  '“Some of my youthful readers are developing wonderful imaginations. This pleases me.” — L. Frank Baum',
  '“Writing is not like painting where you add. … Writing is more like a sculpture where you remove, you eliminate in order to make the work visible. Even those pages you remove somehow remain.” — Elie Wiesel',
  '"A room without books is like a body without a soul." - Marcus Tullius Cicero'
];




//Functions
//Setting up to get a random index from array
const randomIndex = Math.floor(Math.random() * quotesArray.length);
console.log(randomIndex);

console.log(quotesArray.length)

//Get the quote and author using the random index
const randomQuote = quotesArray[randomIndex];

//Display thy quote
let displayQuote = document.getElementById("quote");
displayQuote.innerHTML = `<p>${randomQuote}</p>`;