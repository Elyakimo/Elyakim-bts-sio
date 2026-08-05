#include <stdio.h>

int main(void)
{
    double a, b;
    int choix;

    do {
        printf("Calculatrice simple\n");
        printf("1: addition\n");
        printf("2: soustraction\n");
        printf("3: multiplication\n");
        printf("4: division\n");
        printf("0: quitter\n");
        printf("Choix: ");

        if (scanf("%d", &choix) != 1) {
            return 0;
        }

        if (choix == 0) {
            break;
        }

        if (choix < 1 || choix > 4) {
            printf("Choix invalide.\n\n");
            continue;
        }

        printf("Entrez deux nombres: ");
        if (scanf("%lf %lf", &a, &b) != 2) {
            printf("Entrées invalides.\n");
            return 0;
        }

        switch (choix) {
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
