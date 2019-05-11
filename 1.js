function Me(){
	let jsonText = {
		"name"		: "Muhammad Aria Muktadir",
		"address" 	: "Kp. Babakan Imbangan Rt 01/03, Kec. Cugenang, Kab. Cianjur, Prov. Jawa Barat",
		"hobbies" 	: ["Coding", "Watching Movie", "Read Manga", "Wibs :v"],
		"is_maried"	: false,
		"school"	: {
			"highSchool"	: "SMKN 1 Cianjur",
			"university"	: "Insyallah ITB"
		},
		"skills" : [
			{
				"name"	: "Javascript",
				"score"	: 80
			},
			{
				"name"	: "PHP",
				"score"	: 85
			},
			{
				"name"	: "C++",
				"score"	: 50
			},
			{
				"name"	: "Mysql",
				"score"	: 80
			},
			{
				"name"	: "C#",
				"score"	: 70
			}
		]
	}

	return jsonText;
}

console.log(Me())