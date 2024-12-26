# PHP User Defined Functions
---

 - Besides the built-in PHP functions, it is possible to create your own functions.
   - A function is a block of statements that can be used repeatedly in a program.
   - A function will not execute automatically when a page loads.
   - A function will be executed by a call to the function.
   
## Create a Function
  - A user-defined function declaration starts with the keyword function, followed by the name of the function:

---

### 1. Without argument and without return
### 2. With argument and without return
### 3. Without argument and with return
### 4. With argument and with return

---
## 1. Without argument and without return
  ```php
    function printNameWithoutArgWithoutReturn()
    {
        echo "ABC<br/>";
    }
    printNameWithoutArgWithoutReturn();
  ```
---

## 2. With argument and without return
   ```php
    function printNameWithArgWithoutReturn($name)
    {
        echo $name . "<br/>";
    }
    printNameWithArgWithoutReturn("Namra Pithwa");
  ```
---
## 3. Without argument and with return
   ```php
     function printNameWithoutArgWithReturn()
     {
         return "Namra Pithwa<br/>";
     }
     echo printNameWithoutArgWithReturn();
   ```
---

## 4. With argument and with return
  ```php
    function printNameWithArgWithReturn($name)
    {
        return $name . "<br/>";
    }
    echo printNameWithArgWithReturn("Namra Pithwa");
  ```
