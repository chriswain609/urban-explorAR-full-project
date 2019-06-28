//
//  hunt.swift
//  urban explorAR
//
//  Created by Christopher Wainwright on 06/02/2019.
//  Copyright © 2019 Christopher Wainwright. All rights reserved.
//

import Foundation

// structure to read treasure hunts from json output
struct treasureHunt: Decodable {
    let treasure_hunt_id: String
    let name: String
    let longitude: String
    let latitude: String
}
