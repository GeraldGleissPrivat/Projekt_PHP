
		$(document).ready(() => {
			let NavigationsElemente;
			let gedrücktesNavigationselement;
			let gridElement;
			let portraitBildAusblenden = true;
			NavigationsElemente = $(".navcontainer").children();

			//Zuordnung Navigationselement zu grid Element:
			$(NavigationsElemente).on("click", function (event) {
				let portraitBildAusblenden = true;
				gedrücktesNavigationselement = $(event.target).attr("class");
				switch (gedrücktesNavigationselement) {
					case "Bilder":
						gridElement = "Bilder";
						portraitBildAusblenden = false;
						break;
					case "Übersicht":
						gridElement = "Übersicht";
						break;
					case "Audio":
						gridElement = "Audio";
						break;
					case "Video":
						gridElement = "Video";
						break;
					case "Links":
						gridElement = "Links";
						break;
					case "Verein":
						gridElement = "Verein";
						break;
				}

				$(".Navigation>.navcontainer li").removeClass("nav_selected");
				$(event.target).addClass("nav_selected");

				$("main>section").removeClass("ausgeblendet");
				$("main>section:not(." + gridElement + ")").toggleClass("ausgeblendet");
				if (portraitBildAusblenden == true) {
					$(".PortraitContainer").removeClass("eingeblendet");
					$(".PortraitContainer").addClass("ausgeblendet");
				}
			});

			let PfadZumBild;
			let TextFürÜberblendung;
			$(".lens").on("click", function (event) {
				console.log(PfadZumBild = $(event.target).parents("figure").children("picture").children("img").attr("src"));
				$(".Portraitbild").attr("src", PfadZumBild);
				$(".PortraitContainer").removeClass("ausgeblendet");
				$(".PortraitContainer").addClass("eingeblendet");
				window.scrollTo({ top: 0, left: 0, behavior: "smooth" });

			});

			$(".minuslens").on("click", function (event) {
				PfadZumBild = $(event.target).parents("figure").children("picture").children("img").attr("src");
				console.log(PfadZumBild);
				$(".PortraitContainer").removeClass("eingeblendet");
				$(".PortraitContainer").addClass("ausgeblendet");
			});

			const btn = document.querySelector("#btnNav");
			btn.addEventListener("click", () => {
				const navliste = document.querySelector("nav ul");
				navliste.classList.toggle("visible");
			});

			const btnregistrieren=document.querySelector("#reg");
			btnregistrieren.addEventListener("click", ()=> {
                $(".Reg").val('registrieren');
				$(".Passwort").val('');
				$(".Username").val('');
				$("#reg").css("color","magenta");
                document.querySelector(".Kontaktformular").submit(); //schickt das Formular ab
				console.log("Btn Registriere geklickt");
			});

			const btnlogin=document.querySelector(".btnlogin");
			btnlogin.addEventListener("click", ()=> {
					$(".Reg").val('');
			});

			const btnRegistrieren=$(".btnsenden");
			btnRegistrieren.addEventListener("click", ()=> {
				$("vname").val($("#vorname").value);
			});

		});