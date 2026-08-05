#include <stdio.h>

int main(void) //le programme ne rend aucun argument
{
    double a, b; //on met les variables a et b en double pour pouvoir faire des calculs avec des nombres à virgule(des floats)
    int choix;

    do { //tant que l'utilisateur ne choisit pas de quitter, on continue à afficher le menu
        printf("Calculatrice simple\n");
        printf("1: addition\n");
        printf("2: soustraction\n");
        printf("3: multiplication\n");
        printf("4: division\n");
        printf("0: quitter\n");
        printf("Choix: ");

        if (scanf("%d", &choix) != 1) { //on vérifie que l'utilisateur a bien entré un entier dans l'adresse mémoire de la variable choix, sinon on quitte le programme
            return 0;
        }

        if (choix == 0) { 
            break;
        }

        if (choix < 1 || choix > 4) { //si le choix n'est pas compris entre 1 et 4 ou n'est pas égal à 0, on affiche un message d'erreur et on continue la boucle
            printf("Choix invalide.\n\n");
            continue;
        }

        printf("Entrez deux nombres: "); //les deux nombres sont stockés dans les variables a et b, on vérifie que l'utilisateur a bien entré deux nombres, sinon on quitte le programme
        if (scanf("%lf %lf", &a, &b) != 2) {//%lf est le format pour lire un double, si les deux nombres ne sont pas entrés correctement, on quitte le programme = return 0
            printf("Entrées invalides.\n");
            return 0;
        }

        switch (choix) { //on effectue l'opération choisie par l'utilisateur grâce à un switch() qui grâce à la variable choix, on effectue l'opération correspondante et on affiche le résultat avec 2 chiffres après la virgule(%.2f)
        case 1:
            printf("Résultat: %.2f\n\n", a + b);
            break;
        case 2:
            printf("Résultat: %.2f\n\n", a - b);
            break;
        case 3:
            printf("Résultat: %.2f\n\n", a * b);
            break;
        case 4:
            if (b == 0) {
                printf("Erreur: division par zéro.\n\n");
            } else {
                printf("Résultat: %.2f\n\n", a / b);
            }
            break;
        }
    } while (1);

    printf("Au revoir.\n");
    return 0;
}
