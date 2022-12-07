#include <stdio.h>
#include "fish.h"


int main () {
    fish snappy  = {"Зубастик ", "Пиранья", 65, 6, {{"Мясо", 0.20},{"плавать", 7.5}}};
    label(snappy);
    return 0;
}