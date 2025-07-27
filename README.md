# MarkSheet



## 📄 Student Marksheet Web App

A simple web-based marksheet system built with **HTML**, **CSS**, and **JavaScript**. It allows users to input student subject marks, validates the inputs, calculates total marks and grade, highlights failed subjects.

---

### 📌 Features

* 🔢 Prompt-based input for six subjects
* ✅ Validates marks (must be within range)
* 📊 Calculates total and grade automatically
* ❗ Highlights subjects with failing marks (in red)
* 🧾 Shows full summary in an `alert()` box

---

### 📁 Project Structure

```
📦 Student-Marksheet/
├── index.html        # Main HTML file
├── main.css          # Optional external stylesheet (linked in HTML)
└── README.md         # This documentation
```

---

### 🧮 Subjects & Marks

| Subject          | Max Marks |
| ---------------- | --------- |
| Math             | 100       |
| Computer Science | 100       |
| Physics          | 100       |
| Urdu             | 100       |
| English          | 100       |
| PST              | 50        |

---

### 🎓 Grade Criteria

| Total Marks (Out of 550) | Grade    |
| ------------------------ | -------- |
| 440 – 550                | A1 Grade |
| 385 – 439                | A Grade  |
| 330 – 384                | B Grade  |
| 275 – 329                | C Grade  |
| 220 – 274                | D Grade  |
| Below 220                | Fail     |

---

### ✅ Input Validation

* Marks must be between `0` and their respective max value.
* If an invalid value is entered, a warning alert is shown and input is repeated.
* After submission, an alert displays the full marksheet summary.

---

### 🔴 Fail Highlights

* Any subject with marks below:

  * **33/100** for main subjects
  * **17/50** for PST
    will be highlighted with a **red background**.
* If overall grade is **Fail**, heading and marks color also turn red.

---

### 🖨️ Print Marksheet

Click the **"Print Marksheet"** button to open a printable version in a new tab.

---

### 🚀 How to Use

1. Clone or download this repository.
2. Open `index.html` in a browser.
3. Enter subject marks when prompted.
4. Review the alert summary and see the table update.


---

### 🧑‍💻 Technologies Used

* HTML5
* CSS3
* JavaScript (Vanilla)

---

### 📸 Preview

> <img width="1230" height="717" alt="image" src="https://github.com/user-attachments/assets/a01b9301-9318-41cc-8758-a0054e29292f" />



