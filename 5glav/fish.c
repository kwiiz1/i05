#include <stdio.h>
#include "fish.h"

void label(struct  fish a)
{
    printf("Кличка:%s\nРазновидность:%s\n%i года, %i зубов\n", a.name, a.species, a.teeth, a.age);
    printf("Давать %2.2f кг %s и разрешать %s на протяжении %2.2f часов\n", a.care.food.weight, a.care.food.ingridients, a.care.exercise.description, a.care.exercise.duration );
}

void catalog(fish f) {
    printf("%s - это %s с %d, зубами, ему %d лет\n", f.name, f.species, f.teeth, f.age);
    
}