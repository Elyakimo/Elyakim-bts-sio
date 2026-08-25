package nc.ldu.portail_securise;


import java.beans.BeanProperty;

import org.springframework.context.annotation.Bean; 
import org.springframework.context.annotation.Configuration; 
import org.springframework.security.core.userdetails.User; 
import org.springframework.security.core.userdetails.UserDetails; 
import org.springframework.security.core.userdetails.UserDetailsService; 
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder; 
import org.springframework.security.crypto.password.PasswordEncoder; 
import org.springframework.security.provisioning.InMemoryUserDetailsManager;
import org.springframework.security.config.Customizer; 
import org.springframework.security.config.annotation.web.builders.HttpSecurity; 
import org.springframework.security.web.SecurityFilterChain; 


@Configuration
public class SecurityConfig {
    @Bean
        public PasswordEncoder passwordEncoder() {
            return new BCryptPasswordEncoder();
        }
    @Bean
        public UserDetailsService utilisateurs (PasswordEncoder encoder) {
            UserDetails eleve = User.withUsername("slam")
            .password(encoder.encode("java2026"))
            .roles("USER")
            .build();

            UserDetails administrateur = User.withUsername("admin")
            .password(encoder.encode("admin2026"))
            .roles("USER", "ADMIN")
            .build();

            UserDetails manager = User.withUsername("manager")
            .password(encoder.encode("gestion2026"))
            .roles("USER", "MANAGER")
            .build();

            return new InMemoryUserDetailsManager(eleve, administrateur, manager);
        }
    @Bean
    public SecurityFilterChain filtreSecurite (HttpSecurity http) throws Exception {
        http
            .authorizeHttpRequests(autorisation -> autorisation
                .requestMatchers("/", "/public", "/error").permitAll()
                .requestMatchers("/admin/**").hasRole("ADMIN")
                .requestMatchers("/gestion/**").hasRole("MANAGER")
                .anyRequest().authenticated()
            )
            .formLogin(Customizer.withDefaults())
            .logout(Customizer.withDefaults());
            return http.build();
    }
}