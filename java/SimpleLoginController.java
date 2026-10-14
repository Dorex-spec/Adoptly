package com.adoptly.controller;

import jakarta.servlet.http.HttpSession;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class SimpleLoginController {

    // 1. Check before showing the login page
    @GetMapping("/login")
    public String showLoginPage(HttpSession session, Model model) {
        // If an account is already signed in for this session, send error notice
        if (session.getAttribute("loggedInUser") != null) {
            model.addAttribute("errorMessage", "Account has already signed in.");
            return "login"; 
        }
        
        // Otherwise, show the normal login page
        return "login"; 
    }

    // 2. Process the login when they click "Sign In"
    @PostMapping("/login")
    public String processLogin(@RequestParam String email, HttpSession session, Model model) {
        // Check if an account is already active in the current session
        if (session.getAttribute("loggedInUser") != null) {
            model.addAttribute("errorMessage", "Account has already signed in.");
            return "login"; 
        }
        
        // Log them in by saving their email in the session memory
        session.setAttribute("loggedInUser", email);
        
        return "redirect:/dashboard";
    }

    // 3. Protect your other pages
    @GetMapping("/dashboard")
    public String showDashboard(HttpSession session, Model model) {
        // Retrieve the user from the session
        String user = (String) session.getAttribute("loggedInUser");
        
        if (user == null) {
            // They aren't logged in! Kick them back to the login page.
            return "redirect:/login"; 
        }
        
        model.addAttribute("email", user);
        return "dashboard"; // Show dashboard.html
    }

    // 4. Let them log out
    @GetMapping("/logout")
    public String logout(HttpSession session) {
        // This instantly deletes the current session data
        session.invalidate(); 
        return "redirect:/login";
    }
}