$(document).ready(function () {
  //ẨN HIỆN MENU

  $(".btn-open").click(function () {
    $(".list-mobile-menu").toggle().toggleClass('open');
    $(".modal-background").toggle().toggleClass('open');
    $("body").addClass("overflow");
  });
  $(".click-close").click(function () {
    $(".list-mobile-menu").toggle().toggleClass('open');
    $(".modal-background").toggle().toggleClass('open');
    $("body").removeClass("overflow");
  });
  $(".modal-background").click(function () {
    $(".list-mobile-menu").toggle().toggleClass('open');
    $(".modal-background").toggle().toggleClass('open');
    $("body").removeClass("overflow");
  });

  //ẨN HIỆN FORM
  $(document).on("click", ".btn-show-form", function (e) {
    if ($(".modal-form").css("display") == "none") {
      $("#modal-form").addClass("active");
      $("body").addClass("overflow");
    }
    if (
      $(".modal-bg-form").click(function () {
        $("#modal-form").removeClass("active");
        $("body").removeClass("overflow");
      })
    );
    if (
      $("button.txt-right").click(function () {
        $("#modal-form").removeClass("active");
        $("body").removeClass("overflow");
      })
    );
  });

  //ĐÓNG PHẦN HIỂN THỊ THÔNG BÁO

  $(document).on("click", ".btn-close-notify", function (e) {
        $("#modal-form").removeClass("active");
        $("body").removeClass("overflow");
        $('#success').hide();
        $('#error').hide();
        $('#box-main-form').show();
        window.location.reload();
  });

})


//ÂN HIỆN MODAL FORM DONG XE
const wrapperModels = document.querySelector(".dropdown.models"),
  selectBtnModels = wrapperModels.querySelector(".select-btn"),
  searchInpModels = wrapperModels.querySelector("input"),
  optionsModels = wrapperModels.querySelector(".options");

let models = ["Sedan", "Hatchback", "SUV", "Crossover - CUV", "MPV", "Coupe", "Convertible",
  "Pickup", "Limousine", "Khác"];

function addModels(selectedModels) {
  optionsModels.innerHTML = "";
  models.forEach(models => {
    let isSelected = models == selectedModels ? "selected" : "";
    let li = `<li onclick="updateNameModles(this)" class="${isSelected}">${models}</li>`;
    optionsModels.insertAdjacentHTML("beforeend", li);
  });
}
addModels();

function updateNameModles(selectedLiModels) {
  searchInpModels.value = "";
  addModels(selectedLiModels.innerText);
  wrapperModels.classList.remove("active");
  selectBtnModels.firstElementChild.innerText = selectedLiModels.innerText;
}

searchInpModels.addEventListener("keyup", () => {
  let arr = [];
  let searchWord = searchInpModels.value.toLowerCase();
  arr = models.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
  }).map(data => {
    let isSelected = data == selectBtnModels.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="updateNameModles(this)" class="${isSelected}">${data}</li>`;
  }).join("");
  optionsModels.innerHTML = arr ? arr : `<p style="padding: 10px; color : red ; font-size : 14px">Không tìm thấy dòng xe nào !</p>`;
});

selectBtnModels.addEventListener("click", () => wrapperModels.classList.toggle("active"));

//ẨN HIÊN FORM KHU VỰC

const wrapperArea = document.querySelector(".dropdown.area"),
  selectBtnArea = wrapperArea.querySelector(".select-btn"),
  searchInpArea = wrapperArea.querySelector("input"),
  optionsArea = wrapperArea.querySelector(".options");


let area = ["Hà Giang", "Cao Bằng", "Bắc Kạn", "Lạng Sơn", "Tuyên Quang", "Thái Nguyên",
  "Phú Thọ", "Bắc Giang", "Quảng Ninh", "Lào Cai", "Yên Bái", "Điện Biên",
  "Hoà Bình", "Lai Châu", "Sơn La", "Bắc Ninh", "Hà Nam", "Hà Nội", "Hải Dương",
  "Hải Phòng", "Hưng Yên", "Nam Định", "Ninh Bình", "Thái Bình",
  "Vĩnh Phúc", "Thanh Hoá", "Nghệ An", "Hà Tĩnh", "Quảng Bình", "Quảng Trị", "Thừa Thiên Huế",
  "Đà Nẵng", "Quảng Nam", "Quảng Ngãi", "Bình Định", "Phú Yên", "Khánh Hoà", "Ninh Thuận",
  "Bình Thuận", "Kon Tum", "Gia Lai", "ĐắK LắK", "Đắc Nông", "Lâm Đồng",
  "Bình Phước", "Bình Dương", "Đồng Nai", "Tây Ninh", "Bà Rịa-Vũng Tàu", "Hồ Chí Minh", "Long An", "Đồng Tháp",
  "Tiền Giang", "An Giang", "Bến Tre", "Vĩnh Long", "Trà Vinh", "Hậu Giang", "Kiên Giang", "Sóc Trăng", "Bạc Liêu", "Cà Mau", "Cần Thơ"]

area = area.sort();
function addArea(selectedArea) {
  optionsArea.innerHTML = "";
  area.forEach(area => {
    let isSelected = area == selectedArea ? "selected" : "";
    let li = `<li onclick="updateNameArea(this)" class="${isSelected}">${area}</li>`;
    optionsArea.insertAdjacentHTML("beforeend", li);
  });
}
addArea();

function updateNameArea(selectedLiArea) {
  searchInpArea.value = "";
  addArea(selectedLiArea.innerText);
  wrapperArea.classList.remove("active");
  selectBtnArea.firstElementChild.innerText = selectedLiArea.innerText;
}

searchInpArea.addEventListener("keyup", () => {
  let arr = [];
  let searchWord = searchInpArea.value.toLowerCase();
  arr = area.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
  }).map(data => {
    let isSelected = data == selectBtnArea.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="updateNameArea(this)" class="${isSelected}">${data}</li>`;
  }).join("");
  optionsArea.innerHTML = arr ? arr : `<p style="padding: 10px; color : red ; font-size : 14px">Không tìm thấy khu vực nào !</p>`;
});

selectBtnArea.addEventListener("click", () => wrapperArea.classList.toggle("active"));
