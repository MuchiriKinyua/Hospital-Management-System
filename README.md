# Understanding Flu Vaccine Hesitancy
## A Machine Learning Approach for Informed Public Health Intervention¶
![image](https://github.com/KillionMokaya/-Flu-Vaccine-Hesitancy-Classification/assets/69270616/c08595c8-fd6c-4c05-b76a-3a880c61b59e)

### 1. Introduction
#### 1.1 Business Understanding
This project is aimed to provide insights into predicting seasonal flu vaccination status accurately and identifying key factors influencing vaccination decisions. The results from this study could contribute to optimizing pro-vaccination efforts and targeting specific subgroups to maximize the benefits of herd immunity, particularly in the context of seasonal flu.
#### 1.2 Problem Statement
Vaccination reduces co-infection risk and eases healthcare strain, yet vaccine skepticism is causing immunization rates to decline.
Flu vaccine hesitancy is a major concern, hindering efforts against seasonal flu outbreaks. Despite the flu causing millions of hospitalizations and 52,000 deaths annually, only 51.4% received the vaccine in the 2021-22 season. 
Vaccine hesitancy leads to disease spread, strains healthcare, and may cause co-infections, causing economic burdens and disrupting daily life.
Prompt flu vaccination is crucial, especially during fall and winter when flu spreads
Flu vaccine hesitancy is driven by factors like misinformation, safety fears and beliefs. Understanding these helps design effective interventions.
#### 1.3 Main Objective
To utilize machine learning to understand flu vaccine hesitancy by predicting the likelihood of individuals receiving their seasonal flu vaccines.
 - To identify socio-cultural, psychological, and communication-related factors that affect flu vaccine hesitancy.
 - Develop a predictive model for vaccine hesitancy based on historical data
- Develop tailored recommendations to increase flu vaccine uptake. 

### 2. Data Understanding
![image](https://github.com/KillionMokaya/-Flu-Vaccine-Hesitancy-Classification/assets/69270616/e9df5580-b75f-4f80-9eae-0683026d9794)

 - Target variable: Seasonal_vaccine - Whether respondent received seasonal flu vaccine or not
 - Socio-Demographic and Personal Information:
Age, gender, race, income level and education 
     employment_status, employment_industry, employment_occupation
 - Health-related Variables:
health_insurance, behavioral_antiviral_meds, behavioral_avoidance
     opinion_seas_vacc_effective, opinion_seas_risk,   
     opinion_seas_sick_from_vacc                      
 - Household Information:
household_adults, household_children.

### 3. Models Used
 - Logistic Regression
 - Decision Trees
 - Random Forest
 - Ensemble Method - XGBoost and GridSearchCV
 - KNN
 - Bayes Classification

Here is a depiction of the prominent factors/features identified by the XGBoost classifier, which hold the potential to mitigate vaccine hesitancy.

![image](https://github.com/KillionMokaya/-Flu-Vaccine-Hesitancy-Classification/assets/69270616/7b680f37-6764-4fd3-a1b5-75a85e88363f)

### 4. Recommendations
To enhance the uptake of seasonal flu vaccination, the following strategies could be considered by the government:
 - Enhance Public Awareness Regarding Vaccine Effectiveness: Efforts should focus on increasing public knowledge about   the vaccine's effectiveness in safeguarding against the flu. These awareness initiatives could be executed at the community or national level. Disseminating credible evidence through channels like television or online advertisements can facilitate informed decision-making. 
 - Encourage Regular Physician Recommendations: To bolster herd immunity, it is advisable for healthcare providers to consistently advise their patients to undergo seasonal flu vaccination annually. This personalized approach may yield better results compared to generalized vaccine promotion through alternative means. Nonetheless, comprehensive campaigns remain vital for reaching individuals who may not have routine access to healthcare services.
 - To elevate the overall vaccination rate against seasonal flu, initiatives should prioritize encouraging, educating, and ensuring healthcare access for the following demographics:

      -Individuals aged 18 to 34
      - Uninsured individuals
      - Renters
      - Communities of color
      - Those with income below the poverty threshold
      - Individuals without a high school diploma



