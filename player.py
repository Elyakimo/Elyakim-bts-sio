import pygame
from projectile1 import Projectile1
#creer une premiere classe qui va representer notre personnage
class Player(pygame.sprite.Sprite):

    def __init__(self, game):
        super().__init__()
        self.game = game
        self.health = 100
        self.max_health = 100
        self.attack= 10
        self.velocity = 1
        self.all_projectiles = pygame.sprite.Group()
        self.image = pygame.image.load("assets/gangrio.png")
        self.image = pygame.transform.scale(self.image, (200, 200))
        self.rect = self.image.get_rect()
        self.rect.x = 100
        self.rect.y = 800
        #gravite
        self.gravity = 0.2
        self.velocity_y = 0
        self.jump_speed = -11
    
    def lancer_projectile(self):
        #creer une instance de la classe Projectile1
        self.all_projectiles.add(Projectile1(self))
    
    
    #deplacer le joueur
    #deplaer le joueur vers la droite
    def move_right(self):
        self.rect.x += self.velocity
    #deplacer le joueur vers la gauche
    def move_left(self):
        self.rect.x -= self.velocity
    #sauter
    def apply_gravity(self):
        self.velocity_y += self.gravity
        self.rect.y += self.velocity_y
        #eviter que le joueur tombe en dessous du sol
        if self.rect.y >= 485:
            self.rect.y = 485
            self.velocity_y = 0
    def jump(self):
        #sauter uniquement si le joueur est sur le sol
        if self.rect.y == 485:
            self.velocity_y = self.jump_speed
    
    def damage(self):
        # Vérifier les collisions avec les projectiles du joueur 2
        colliding_projectiles = self.game.check_collision(self, self.game.player2.all_projectiles)
        if colliding_projectiles:
            for projectile in colliding_projectiles:
                projectile.kill()
        self.health -= 10
