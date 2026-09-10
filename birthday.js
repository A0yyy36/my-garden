function getAge(year, month, day) {

    const today = new Date(); // 現在の日時取得
    const birthdate = new Date(year, month - 1, day); // 誕生日設定
    const currentYearBirthday = new Date(
        today.getFullYear(), 
        birthdate.getMonth(), 
        birthdate.getDate()
    );
    let age = today.getFullYear() - birthdate.getFullYear();

    if (today < currentYearBirthday) {
        age--;
    }

    return age;
}

const age = getAge(2003, 9, 24);
document.getElementById("age").textContent = age;