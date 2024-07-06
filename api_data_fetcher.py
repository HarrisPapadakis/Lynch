import requests
import json

def fetch_data(api_url):
    """
    Fetch data from a public API.
    
    Parameters:
    api_url (str): The URL of the API endpoint.
    
    Returns:
    dict: The data fetched from the API.
    """
    try:
        response = requests.get(api_url)
        response.raise_for_status()
        data = response.json()
        print(f"Data fetched successfully from {api_url}")
        return data
    except requests.exceptions.HTTPError as http_err:
        print(f"HTTP error occurred: {http_err}")
    except Exception as err:
        print(f"An error occurred: {err}")
    return None

def save_data(data, file_path):
    """
    Save data to a JSON file.
    
    Parameters:
    data (dict): The data to save.
    file_path (str): The path to the output JSON file.
    """
    try:
        with open(file_path, 'w') as json_file:
            json.dump(data, json_file, indent=4)
        print(f"Data saved to {file_path}")
    except Exception as e:
        print(f"Error saving data to {file_path}: {e}")

def main():
    api_url = 'https://api.spacexdata.com/v4/launches/latest'  # Replace with your API URL
    output_file = 'latest_launch.json'  # Replace with your desired output file path

    data = fetch_data(api_url)
    if data:
        save_data(data, output_file)

if __name__ == "__main__":
    main()
