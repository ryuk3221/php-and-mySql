function wordPattern(word) {
  let word1 = word.toLowerCase();
  const obj = {};
  const result = [];
  let count = 0;
  word1.split("").forEach((el) => {
    if (obj[el] == undefined) {
      obj[el] = count;
      count++;
    }
  });
  word1.split("").forEach((el) => {
    result.push(obj[el]);
  });
  return result.join(".");
}

console.log(wordPattern("Hippopotomonstrosesquippedaliophobia"));
