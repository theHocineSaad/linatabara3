const dairaSelect = document.getElementById('dairaSelect');
const wilayaSelect = document.getElementById('wilayaSelect');

const [html] = document.getElementsByTagName("html")
const lang = html.getAttribute("lang");

const getDairas = () => {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var dairas = JSON.parse(this.responseText);

            if(lang === 'ar'){
                dairaSelect.innerHTML = '<option selected hidden style="display:none" value="">الدائرة</option>';
            } else if(lang === 'fr'){
                dairaSelect.innerHTML = '<option selected hidden style="display:none" value="">Daira</option>';
            }

            dairas.forEach(element => {
                const option = document.createElement("option");
                option.value = element.id;
                option.text = element.name;
                dairaSelect.add(option);
                dairaSelect.removeAttribute("disabled");
            });
        }
    };
    var wilaya = wilayaSelect.value;
    xhttp.open("GET",  `/${lang}/api/dairas/` + wilaya, true);
    xhttp.send();
}

if(wilayaSelect.value){
    getDairas()
}

wilayaSelect.addEventListener('change', getDairas);
