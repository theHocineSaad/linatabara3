const e=document.getElementById("dairaSelect"),i=document.getElementById("wilayaSelect"),[r]=document.getElementsByTagName("html"),n=r.getAttribute("lang"),s=()=>{var t=new XMLHttpRequest;t.onreadystatechange=function(){if(this.readyState==4&&this.status==200){var l=JSON.parse(this.responseText);n==="ar"?e.innerHTML='<option selected hidden style="display:none" value="">\u0627\u0644\u062F\u0627\u0626\u0631\u0629</option>':n==="fr"&&(e.innerHTML='<option selected hidden style="display:none" value="">Daira</option>'),l.forEach(o=>{const a=document.createElement("option");a.value=o.id,a.text=o.name,e.add(a),e.removeAttribute("disabled")})}};var d=i.value;t.open("GET",`/${n}/api/dairas/`+d,!0),t.send()};i.value&&s();i.addEventListener("change",s);