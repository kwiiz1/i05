#include "4.h"

void encrypt (char *message) // передаем функцию указатель на массив
{
    char c;
    while (*message) {
        *message = *message ^ 31;
        message++;
    }
}