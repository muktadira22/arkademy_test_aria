function cetak(value){
	let result = "";
	let character = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	let length = 32;
	for(let i = 1; i <= value; i++){
		for(let j = 0; j < length; j++){
			result += character.charAt(Math.floor(Math.random() * length));
		}
		result += "\n";
	}

	console.log(result);
}

cetak(2);