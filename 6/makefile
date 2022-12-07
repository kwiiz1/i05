main: island.o main.o
	gcc island.o main.o -o main

fish.o: island.c island.h
	gcc -c island.c

main.o: main.c island.h
	gcc -c main.c