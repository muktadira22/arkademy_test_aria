function cetak_gambar(){
	let result = "";
	let array_string = ["P","R","O","G","R","A","M","M","E","R"];
	for(let i = 0; i < array_string.length; i++){
		
		for(let j = 0; j < array_string.length; j++){
			if(j === i || ((i + 1) + j == array_string.length))
				result += array_string[i];
			else
				result += " = ";
		}
		
		result += "\n"
	}

	return result;
}

console.log(cetak_gambar());